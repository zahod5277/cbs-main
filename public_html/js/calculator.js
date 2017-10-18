jQuery('document').ready(function () {
    if (jQuery('select').is('.mainOption')) {
        jQuery('.mainOption').calculator({
            optionsWrapper: '#calculatorBlock',
            optionsSelect: '.calculator-form-select-item',
            mainOption: '.mainOption',
            dependentOptions: '.paramSelect',
            operatorSelector: 'data-operator',
            summaryField: '.calculator-summ',
            basePrice: '[name="basePrice"]',
            mode: 'default'
        });
    }
    if (jQuery('select').is('#sliderCalcParams')) {
        jQuery('#sliderCalcParams').calculator({
            optionsWrapper: '#calculatorBlock',
            optionsSelect: '.options-bonus-hidden',
            mainOption: '#sliderCalcParams',
            operatorSelector: 'data-operator',
            summaryField: '.slider-form__block_sum>strong',
            basePrice: '#sliderCalcParams',
            mode: 'slider',
            optionsNameSelector: '[name="options-',
            ajax: false
        });
    }
});
//супер мега-плагин jQuery для расчета параметров
(function ($) {
    var methods = {
        options: {
            mode: 'default',
            optionsNameSelector: '[name="param-',
            ajax: true
        },
        init: function (options) {
            $this = this;
            $this.options = jQuery.extend(methods.options, options);
            methods.calculate();
            //вешаем обработчики на события
            jQuery('body').on('change', $this.options.mainOption, function () {
                if ($this.options.ajax === true) {
                    methods.getDependedOptions(jQuery(this).data('pageid'), jQuery(this).val());
                }
                setTimeout(methods.calculate, 1000);
            });
            jQuery('body').on('change', $this.options.optionsSelect, function () {
                methods.calculate();
            });
        },
        calculate: function () {
            //создаем базовые переменные расчета - опции, порядок сортировки
            var summ = 0, objects, pseudo = '';
            if (jQuery('input,select').is($this.options.basePrice)) {
                summ = parseFloat(jQuery($this.options.basePrice).val());
            }
            if (methods.options.mode == 'default') {
                //на всякий случай сортируем массив, чтобы не было ошибки в порядке суммирования и умножения
                var $params = jQuery($this.options.dependentOptions);
                objects = methods.sortOptions($params, summ);
            } else {
                objects = jQuery($this.options.optionsSelect);
                pseudo = ':checked'
            }
            //Перебираем все объекты и вычисляем их сумму и произведение, в зависимости от оператора
            for (var i = 1; i < objects.length + 1; i++) {
                summ = methods.calcByOperator(jQuery($this.options.optionsNameSelector + i + '"]' + pseudo), summ);
            }
            summ = methods.formatNumbers(summ.toString());
            jQuery($this.options.summaryField).html(summ);
        },
        sortOptions: function (options) {
            var objects = [];
            jQuery(options).each(function () {
                objects.push(jQuery(this).attr('data-sort'));
            });
            objects.sort(this.sortNumber);
            return objects;
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
    $.fn.calculator = function (method) {
        if (methods[method]) {
            return methods[ method ].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || !method) {
            return methods.init.apply(this, arguments);
        } else {
            $.error('Метод с именем ' + method + ' не существует для jQuery.calculator');
        }
    };
})(jQuery);