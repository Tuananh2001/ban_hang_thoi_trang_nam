
// Đối tượng Validator
function Validator (option) {

    function getParent(element, selector) {
        while(element.parentElement) {
            if(element.parentElement.matches(selector)) {
                return element.parentElement
            }
            element = element.parentElement
        }
    }

    var selectorRules = {}

    function validate (inputElement, rule) {
        var errorMessage  
        var errorElement = getParent(inputElement, option.formGroupSelector).querySelector(option.errorSelector)

        // lấy ra các rules của selector
        var rules = selectorRules[rule.selector]

        // Lặp qua từng rule & kiểm tra
        // Nếu có lỗi thì dừng kiểm tra
        for (var i = 0; i < rules.length; i++) {
            switch (inputElement.type) {
                case 'radio':
                case 'checkbox':
                    errorMessage = rules[i](
                        formElement.querySelector(rule.selector + ':checked')
                    )
                    break
                default:
                    errorMessage = rules[i](inputElement.value)
            }
            if (errorMessage) break;
        }

        if(errorMessage) {
            errorElement.innerText = errorMessage
            getParent(inputElement, option.formGroupSelector).classList.add('invalid')
        }else {
            errorElement.innerText = ''
            getParent(inputElement, option.formGroupSelector).classList.remove('invalid')
        }

        return !errorMessage
    }
    
    // Lấy element của form cần validate
    var formElement = document.querySelector(option.form)
    if (formElement) {
        // khi submit form
        
            e.preventDefault()

            var isFormValid = true;

            // Lặp qua từng rules và validate
            option.rules.forEach((rule) => {
                var inputElement = formElement.querySelector(rule.selector)
                var isValid = validate(inputElement, rule)
                if (!isValid) {
                    isFormValid = false
                }
            })


            if (isFormValid) {
                //Trường hợp submit vs JavaScript
                if(typeof option.onSubmit === 'function') {
                    var enableInputs = formElement.querySelectorAll('[name]:not([disabled])')
                    var formValues = Array.from(enableInputs).reduce(function(values, input) {
                        
                        switch(input.type) {
                            case 'radio':
                                values[input.name] = formElement.querySelector('input[name="' + input.name + '"]:checked').value
                                break
                            case 'checkbox':
                                if(!input.matches(':checked')) {
                                    values[input.name] = ''
                                    return values
                                }
                                if(!Array.isArray(values[input.name])) {
                                    values[input.name] = []
                                }
                                values[input.name].push(input.value)
                                break
                            case 'file' :
                                values[input.name] = input.files
                                break
                            default:
                                values[input.name] = input.value
                        }
                        
                        return values
                    }, {})
                    option.onSubmit(formValues)
                }
                // Trường hợp submit với hành vi mặc định
                else{
                    
                }
            }

        }

        // Lặp qua mỗi rule và xử lý (Lắng nghe sự kiện blur, input, ...)
        option.rules.forEach((rule) => {

            // Lưu lại các rules cho mỗi input
            if(Array.isArray(selectorRules[rule.selector])) {
                selectorRules[rule.selector].push(rule.test)
            }else {
                selectorRules[rule.selector] = [rule.test]
            }
            
            

            var inputElements = formElement.querySelectorAll(rule.selector)
            Array.from(inputElements).forEach(function(inputElement) {
                var errorElement = getParent(inputElement, option.formGroupSelector).querySelector(option.errorSelector)
                 
                // xử lý trương hợp blur khỏi input
                 inputElement.onblur = function () {
                    validate(inputElement, rule)
                }

                // xử lý mỗi khi người dùng nhập vào input
                inputElement.oninput = function () {
                    errorElement.innerText = ''
                    getParent(inputElement, option.formGroupSelector).classList.remove('invalid')
                }
            })
            

          

        });
    }






// định nghĩa rules
// nguyên tắc của các rules
// 1. Khi có lỗi => trả ra mesae lỗi
// 2. Khi hợp lệ => Không trả ra cái j cả (undefined)
Validator.isRequired = function (selector, mesage) {
    return {
        selector: selector,
        test: function (value) {
            return value ? undefined : mesage || 'Vui lòng nhập trường này'
        }
    }
}

Validator.isEmail = function (selector, mesage) {
    return {
        selector: selector,
        test: function (value) {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
            return regex.test(value) ? undefined : mesage || 'Vui lòng nhập đúng định dạng email'
        }
    }
}

Validator.minLength = function (selector, min, mesage) {
    return {
        selector: selector,
        test: function (value) {
           return value.length >= min ? undefined : mesage || `Vui lòng nhập tối thiểu ${min} ký tự` 
        }
    }
}

Validator.isConfirmed = function(selector, getConfirmValue, mesage) {
    return {
        selector: selector,
        test: function (value) {
            return value === getConfirmValue() ? undefined : mesage || 'Giá trị nhập vào không chính xác'
        }
    }
}