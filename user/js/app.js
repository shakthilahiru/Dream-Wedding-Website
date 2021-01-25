// budgetController is responsible for performing all calculations
let budgetController = (function() {

    let Car = function(id, description, amount) {
        this.id = id;
        this.description = description;
        this.amount = amount
    };

    let Music = function(id, description, amount) {
        this.id = id;
        this.description = description;
        this.amount = amount;
    };

    let calculateTotal = function(type) {
        let sum = 0;
        data.items[type].forEach(function(el) {
            sum += el.amount;
        });
        data.totals[type] = sum;
    };

    let data = {
        items: {
            car: [],
            music: []                
        },
        totals: {
            car: 0,
            music: 0,
        },
        budget: 0,
        percentage: -1
    };

    return {
        // adds a new item to data object based on the type(income/expense)
        addNewItem: function(type, desc, amt) {
            let newItem, id;
            if (data.items[type].length > 0) {
                id = data.items[type][data.items[type].length - 1].id + 1;
            } else {
                id = 0;
            }

            if(type === 'car') {
                newItem = new Car(id,desc,amt);
            } else if (type === 'music') {
                newItem = new Music(id, desc, amt);
            }

            data.items[type].push(newItem);

            return newItem;
        },

        // deletes an item from data object based on type(income/expense)
        deleteItem: function(type, id) {
            let ids, index;
            ids = data.items[type].map(function(current) {
                return current.id;
            });

            index = ids.indexOf(id);

            if(index !== -1) {
                data.items[type].splice(index, 1);
            }

        },

        // calculates the percentage and remaining balance
        calculateBudget: function() {
            calculateTotal('car');
            calculateTotal('music');

            data.budget = data.totals.music - data.totals.car;
            if(data.totals.music > 0) {
                data.percentage = Math.round((data.totals.car / data.totals.music) * 100);
            } else {
                data.percentage = -1;
            }

        },

        getBudget: function() {
            return {
                budget: data.budget,
                totalMusic: data.totals.music,
                totalCar: data.totals.car,
                percentage: data.percentage
            }
        },

        getData: function() {
            return data;
        },

        testing: function() {
            console.log(data);
        },

    };

})();

// UIController is responsibel for all DOM Maniipulations
let UIController = (function() {
    let myChart;
    return {
        getInput: function() {
            return {
                type: document.getElementById('amount-type').value,
                description: document.getElementById('description').value,
                amount: parseFloat(document.getElementById('amount').value)
            }
        },
        // add a new income/expense to dom
        addListItems: function(obj, type) {
            let html, newHtml, element;

            if(type === 'music') {
                element = 'list-music';
                html = `
                <div class="border-grey item-list mx-5 br-6 columns is-mobile" id="music-%id%">
                    <div class="column is-6 margin-auto has-text-left">%description%</div>
                    <div class="column is-3 margin-auto has-text-left">%amount%</div>
                    <div class="column is-3 margin-auto">
                        <button class="button is-small is-danger">
                            x
                        </button>
                    </div>
                </div>`;
            } else if(type === 'car') {
                element = 'list-car';
                html = `<div class="border-grey item-list mx-5 br-6 columns is-mobile" id="car-%id%">
                    <div class="column is-6 margin-auto has-text-left">%description%</div>
                    <div class="column is-3 margin-auto has-text-left">%amount%</div>                    
                    <div class="column is-3 margin-auto">
                        <button class="button is-small is-danger">
                            x
                        </button>
                    </div>
                </div>`;
            }

            newHtml = html.replace('%id%', obj.id);
            newHtml = newHtml.replace('%description%', obj.description);
            newHtml = newHtml.replace('%amount%', obj.amount);

            document.getElementById(element).insertAdjacentHTML('beforeend', newHtml);
         },

        // delete an item from the income/expense list
         deleteListItem: function(selectorID) {
             let el = document.getElementById(selectorID);
            el.parentNode.removeChild(el);
         },

         // clear the input fields
         clearFields: function() {
             document.getElementById('description').value = '';
             document.getElementById('amount').value = '';
             document.getElementById('description').focus();             
         },

         // display the total income, expenses and percentage
         displayBudget: function(obj) {
            document.getElementById('total-budget').textContent = obj.budget;
            document.getElementById('total-music').textContent = obj.totalMusic;
            document.getElementById('total-car').textContent = obj.totalCar;

            if(obj.percentage > 0) {
                document.getElementById('total-percentage').textContent = obj.percentage + '%';
            } else {
                document.getElementById('total-percentage').textContent = '---';
            }
         },

         // builds a pie-chart using Chart.js
         buildChart: function(music,car) { 
            if (myChart) {
                // destroy the chart with old data after user enters a new input
                myChart.destroy();
            }
            let ctx, labels, data, dataset;
            document.getElementById('pie-chart').style.visibility = 'visible';
            ctx = document.getElementById('myChart').getContext('2d');
            labels = ['Music', 'Car'];
            dataset = [music, car];
            data = {
                labels: labels,
                datasets: [{
                    data: dataset,
                    backgroundColor: [
                        '#0b8793',
                        '#fe8c00'
                    ],
                    borderColor: [
                        '#6f0000',
                        '#6f0000'
                    ],
                    borderWidth: 1
                }]
            };

            myChart = new Chart(ctx, {
                type: 'pie',
                data: data,
                options: {
                    title: {
                        display: true,
                        text: 'Music vs Car',
                        fontColor: 'black',
                        fontSize: 16
                    },
                    responsive: true,
                    legend: {
                        labels: {
                            fontColor: "black",
                            fontSize: 16
                        }
                    }
                }
            });

            myChart.update();
        },
    }
})();

// appController uses mthods from UI and Budget Controller
let appController = (function(budget, ui) {

    // returns date in mm-dd-yyyy format
    let getDate = function() {
        let d,year,day,month,date; 

        d = new Date();
        year = d.getFullYear();
        day = d.getDate();
        month = d.getMonth() + 1;
        date = month + '-' + day + '-' + year;

        return date;
    };

    // set event listeners for buttons and key event
    let setEventListeners = function() {
        document.querySelector('#add-btn').addEventListener('click',addItem);
        document.addEventListener('keypress', function(e) {
            if(e.keyCode === 13 || e.which === 13) {
                addItem();
            }
        });
        document.getElementById('lists-container').addEventListener('click', deleteItem);
    };


    let updateBudget = function() {
        budgetController.calculateBudget();
        let budget = budgetController.getBudget();
        ui.displayBudget(budget);
        ui.buildChart(budget.totalMusic,budget.totalCar);
    };

    let addItem = function() {
        let input, newItem;
        
        input = ui.getInput();
        

        if(input.description !== "" && !isNaN(input.amount) && input.amount > 0) {
            newItem = budget.addNewItem(input.type,input.description,input.amount);
            ui.addListItems(newItem, input.type);
            ui.clearFields();
            updateBudget();
        }
    };

    let deleteItem = function(e) {
        let itemID, splitID, type, ID;

        itemID = e.target.parentNode.parentNode.id;
        if(itemID) {
            splitID = itemID.split('-');
            type = splitID[0];
            ID = parseInt(splitID[1]);

            if(type === "music" || type === "car"){
                budget.deleteItem(type, ID);
                ui.deleteListItem(itemID);
                updateBudget();
            }

        }
    };


    return {
        init: function() {
            document.getElementById('pie-chart').style.visibility = 'hidden';
            document.getElementById('date').textContent = getDate();
            setEventListeners();
            ui.displayBudget({
                budget: 0,
                totalIncome: 0,
                totalExpense: 0,
                percentage: -1
            });
        }
    }

})(budgetController, UIController);

//initilaize the application
appController.init();