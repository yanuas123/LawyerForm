# LawyerForm

These are three-form html templates for an Israeli lawyer site. The forms designed for online registration of various types of court
applications. The forms have a stepwise type of data entry. Data of chargers and defendants are first entered. Then
court data, various appendant data and copies of documents. Finally, determining the amount to be paid. The responsive template is designed to 320 pixels.

> [Demo page First form](https://yanuas123.github.io/LawyerForm/index1.html)

> [Demo page Second form](https://yanuas123.github.io/LawyerForm/index2.html)

> [Demo page Third form](https://yanuas123.github.io/LawyerForm/index3.html)

## Built With

- HTML5
- CSS3
- [JQuery](https://jquery.com/) v 3.3.1
- custom JQuery-UI - for datepicker
- [Select2](https://select2.org/) v 4.0.6 - for stylized Select Element

## Deployment

You can change the behavior of the form by changing the settings at the top of the javascript file.

### Submit

The submit is triggered in the form only after successful validation. You can define the behavior of the form after the submit in the variable `submitCallback`. There you get the variables: `data` - an object of form fields with values collected by validation; `form` is the object of the form itself. There you can add a request to send the data, or return `return "submit"` to send the form directly.

### Form Settings

The `forms_settings` variable contains form settings. Depending on the `id` present in the template, the appropriate form settings are applied.

#### Object of form settings

| Property | Type  | Description |
| -------- | :---: | ----------- |
| steps | object | Contains object of steps, where property is a single step name (this name placed in the template in step block as class; example: `step_1`) and value of the property is **[Step Settings](#step-settings)**. |
| price_count | object | Contains an object of **[Price Count Settings](#price-count-settings)** |
| price_get | object | One field or text container can get price from other field (for example SELECT). There you can define settings to this functional. Property in this object is unique id from attribute `data-pr-summ` (target for price) and value is unique id from attribute `data-pr` (source of price). |
| form_name | string | Form name (from attribute `name`) |

#### Step Settings

| Property | Type  | Default | Description |
| -------- | :---: | ------- | ----------- |
| name | string |  | step name (this name placed in the template in step block as class; example: `step_1`) |
| btn_next | string | from previous step | title for next step button |
| part_name | string |  | This is used on first steps for defining person title (chargers or defendants) for the results. |
| person_title | string |  | This is used on first steps for defining first described text under heading title. |
| clone_form | boolean | false | On the pages where you can to define chargers and defendants, you can define more then one person or organization and put one to results to block above form. The property launch this functional. |
| broken_step | boolean | false | Two steps can be combined in the one step. This is reflected on the steps labels. The labels do not switch further. The property launch this functional. |
| radio_btn_comb | string |  | The page may have radio buttons that control the display of other fields or blocks. This buttons must have `class="lead_radio"` and digital value. Combination of this values defines blocks to display. This property contain initial value. |
| hidding_rules | object |  | Property in this object is string of radio buttons combination and value - array of the strings. The strings are unique id from an attribute `data-step-row`. If the property match the radio buttons combination - blocks that match the id are displayed. |
| validation_rules | object |  | Property in this object is string - value of name attribute of INPUT and value of property - regular expression that defines a validation rule for the field. |

#### Price Count Settings

| Property | Type  | Description |
| -------- | :---: | ----------- |
| *unique string* | string\|Function(key) | You can get data from few fields, perform any calculation and put result to other field or text container. *unique string* - unique id from attribute `data-tax-summ` (target for price). String value - formula for calculation. This formula can contain only numbers and simple mathematical operators `+ - * /`, where number is unique id from attribute `data-tax` (source of price). Function - custom function where you can perform any calculations and where key would be own property. |

## Author

- Yaroslav Levchenko

## License

This project is licensed under the MIT License - see the [LICENSE.md](License.md) file for details
