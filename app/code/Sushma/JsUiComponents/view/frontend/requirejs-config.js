// var config = {
//     map:{
//         '*' : {
//             coffee : 'Sushma_JsUiComponents/js/requirejs-example'
//         }
//     }
// };


// var config ={
//     map: {
//         '*': {
//             'coffee': 'Sushma_JsUiComponents/js/requirejs-example'
//         }
//     },
//  };


// var config={
//     config: {
//         mixins:{
//             "Magento_Checkout/js/checkout-data" :{
//                 "Sushma_JsUiComponents/js/checkout-data-mixin" : true,
//             }
//         }
//     }
// }

//making a requirejs file to run on every module  load
// var config={
//     deps:['Sushma_JsUiComponents/js/log-when-loaded']
// }

//defining the dependency for a core module to load a custom module to load before

// var config={
//     shim:{
//         'Magento_Catalog/js/view/compare-products':{
//             deps:[
//                 'Sushma_JsUiComponents/js/before-compare-products-example'
//             ]
//         }
//     }
// }


// var config={
//     paths:{
//         'Sushma':'Sushma_JsUiComponents/js/v2',
//         'Sushma-title' : 'Sushma_JsUiComponents/js/v1/title'
//     }
// }


var config = {
    config:{
        mixins:{
            "Magento_Catalog/js/catalog-add-to-cart" : {
                'Sushma_JsUiComponents/js/add-to-cart-mixins' : true,
        }
    }
}
};