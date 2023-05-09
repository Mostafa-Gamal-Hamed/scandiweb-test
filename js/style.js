// Add Product //

// Jquery //
$(document).ready(function () {

  $("#productType").change(function() {

    if($("#productType").val() == ("dvd")) {
      $("#size").removeClass("hid");
      $("#weight").addClass("hid");
      $("#Furniture").addClass("hid");
    }
    if($("#productType").val() == ("book")) {
      $("#weight").removeClass("hid");
      $("#size").addClass("hid");
      $("#Furniture").addClass("hid");
    }
    if($("#productType").val() == ("furn")) {
      $("#Furniture").removeClass("hid");
      $("#size").addClass("hid");
      $("#weight").addClass("hid");
    }
  });

});


$('#product_form').validate({
  rules: {
    sku:  "required",
    name: "required",
    price: {
      required : true,
      number : true
    },
    productType: "required",
    size: {
      required : true,
      number : true
    },
    weight: {
      required : true,
      number : true
    },
    Furniture: "required",
    height: {
      required : true,
      number : true
    },
    width: {
      required : true,
      number : true
    },
    length: {
      required : true,
      number : true
    },
  },
  messages: {
    sku: "Please, submit required data",
    name: "Please, submit required data",
    price: {
      required : "Please, submit required data",
      number : "Please, provide the data of indicated type"
    },
    productType: "Please, submit required data",
    size: {
      required : "Please, submit required data",
      number : "Please, provide the data of indicated type"
    },
    weight: {
      required : "Please, submit required data",
      number : "Please, provide the data of indicated type"
    },
    Furniture: "Please, submit required data",
    height: {
      required : "Please, submit required data",
      number : "Please, provide the data of indicated type"
    },
    width: {
      required : "Please, submit required data",
      number : "Please, provide the data of indicated type"
    },
    length: {
      required : "Please, submit required data",
      number : "Please, provide the data of indicated type"
    }
  },
  
  submitHandler:function(form){
    form.submit();
	},
  onsubmit: true
});
