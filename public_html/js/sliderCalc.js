jQuery('document').ready(function () {
    slidecalc.init({
        mode: 'sliderCalc'
    });
});
var slidecalc = {
    options: {
        optionsWrapper: '#calculatorBlock',
        optionsSelect: '[name *= options]',
        mainOption: '#sliderCalcParams',
        dependentOptions: '.paramSelect',
        operatorSelector: 'data-operator',
        summaryField: '.slider-form__block_sum>strong',
        basePrice: '[name="sliderCalcParams"]',
        mode: 'mainCalculator'
    },
    init: function (options) {

        this.options = jQuery.extend($this.options, options);

        $this = this;
        $this.calculate();
        //вешаем обработчики на события
        jQuery('body').on('change', $this.options.mainOption, function () {
            $this.getDependedOptions(jQuery(this).data('pageid'), jQuery(this).val());
            setTimeout($this.calculate, 1000);
        });
        jQuery('body').on('change', $this.options.optionsSelect, function () {
            $this.calculate();
        });
    },
    calculate: function () {
        //создаем базовые переменные расчета - опции, порядок сортировки
        var $params = jQuery($this.options.dependentOptions),
                summ = 0,
                sortedObjects;
        console.log(this.options.basePrice);
        if (jQuery('body').is($this.options.basePrice)) {
            console.log('идет сюда');
            summ = parseFloat(jQuery($this.options.basePrice).val());
        }
        console.log($this.options.mode);
        if ($this.options.mode == 'mainCalculator') {
            console.log('вызывается эо');
            //на всякий случай сортируем массив, чтобы не было ошибки в порядке суммирования и умножения
           summ = $this.sortOptions($params);
        }
        console.log('summa '+summ);
        summ = $this.formatNumbers(summ.toString());
        jQuery($this.options.summaryField).html(summ);
    },
    sortOptions: function (options) {
        var objects = [],
            summ;
        jQuery(options).each(function () {
            objects.push(jQuery(this).attr('data-sort'));
        });
        objects.sort(this.sortNumber);
        //Перебираем все объекты и вычисляем их сумму и произведение, в зависимости от оператора
            for (var i = 1; i < objects.length + 1; i++) {
                summ = $this.calcByOperator(jQuery('[name="param-' + i + '"]'), summ);
            }
        return summ;
    },
    //функция сортировки чисел функцией Sort();
    sortNumber: function (a, b) {
        return a - b;
    },
    //функция расчета суммы в зависимости от оператора
    calcByOperator: function (object, summ) {
        var operator = jQuery(object).data('operator'),
                value = parseFloat(jQuery(object).val());
        switch (operator) {
            case '+':
                summ = summ + value;
                break;
            case '*':
                summ = summ * value;
                break;
            case '-':
                summ = summ - value;
                break;
            default:
                summ = summ;
                break;
        }
        return Math.round(summ);
    },
    getDependedOptions: function (pageid, val) {
        jQuery.post('ajax.php', {
            action: 'getDependedOptions',
            val: val,
            page: pageid
        }, function (data) {
            var data = JSON.parse(data);
            if (data.status == 'success') {
                jQuery($this.options.optionsWrapper).html(data.html);
            } else {
            }
        });
    },
    formatNumbers: function (summ) {
        var numberFormatRule = {
            4: 1,
            5: 2,
            6: 3
        },
                formattedNumber = '';
        if (summ.length > 3) {
            formattedNumber = summ.substring(0, numberFormatRule[summ.length]) + ' ' + summ.substring(numberFormatRule[summ.length], summ.length);
        } else {
            formattedNumber = summ;
        }
        return formattedNumber;
    }
};