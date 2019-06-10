$(document).ready(function(){
    $("#jams").hide();
    $("#jellies").hide();
    $("#chutneys").hide();
    $("#hampers").hide();
    $("#other-products-button").hide();
    

    /*$(".product-items").on('click',function() {
        $('html,body').animate({
    scrollTop: $('.refine-item-img').offset().top
}, 200);
    });*/

    $(".product-items").click(
        function()
        {
            $('html:not(:animated), body:not(:animated)').animate({
                scrollTop: $("#midbed").offset().top
            },600);
        }
    );
     $("#bed").click(
        function()
        {
            $('html:not(:animated), body:not(:animated)').animate({
                scrollTop: $("#product-list").offset().top
            },600);
        }
    );


    //hide and show buttons for mobile users
    if (Modernizr.mq('(max-width: 767px)')) {
        $("#other-products-button").show();
        $("#jams-button").hide();
        $("#jellies-button").hide();
        $("#chutneys-button").hide();
        $("#hampers-button").hide();

        $("#other-products-button").click(function(){
            $("#marmalades-button").show();
            $("#jams-button").show();
            $("#jellies-button").show();
            $("#chutneys-button").show();
            $("#hampers-button").show();
        });
        $("#jams-button").click(function(){
            $("#marmalades-button").hide();
            $("#jellies-button").hide();
            $("#chutneys-button").hide();
            $("#hampers-button").hide();
        });
        $("#marmalades-button").click(function(){
            $("#jams-button").hide();
            $("#jellies-button").hide();
            $("#chutneys-button").hide();
            $("#hampers-button").hide();
        });
        $("#jellies-button").click(function(){
            $("#jams-button").hide();
            $("#marmalades-button").hide();
            $("#chutneys-button").hide();
            $("#hampers-button").hide();
        });
        $("#chutneys-button").click(function(){
            $("#jams-button").hide();
            $("#marmalades-button").hide();
            $("#jellies-button").hide();
            $("#hampers-button").hide();
        });
        $("#hampers-button").click(function(){
            $("#jams-button").hide();
            $("#marmalades-button").hide();
            $("#jellies-button").hide();
            $("#chutneys-button").hide();
        });
    };


    //hide refind marmalade container items until clicked by user
    $("#refine-lemon-lime-gin-marmalade").hide();
    $("#refine-orange-marmalade-blackberry-brandy").hide();
    $("#refine-lemon-spiced-elderberry-vodka-marmalade").hide();
    $("#refine-oranag-damson-vodka-marmalade").hide();
    $("#refine-lemon-beech-leaf-noyau-marmalade").hide();
    $("#refine-orange-vanilla-marmalade").hide();
    $("#refine-lemon-lime-sloe-gin-marmalade").hide();
    $("#refine-orange-marmalade").hide();

    //hide refined jelly container items until clicked by user
    $("#refine-redcurrent-jelly").hide();
    $("#refine-honeyberry-jelly").hide();
    $("#refine-elderberry-port-jelly").hide();
    $("#refine-spiced-apple-jelly").hide();

    //hide refined jams container items until clicked by user
    $("#refine-strawberry-conserve").hide();
    $("#refine-mixed-berry-conserve").hide();
    $("#refine-raspberry-conserve").hide();

    //hide refined chutney container items until clicked by user
    $("#refine-lightly-spiced-banana-chutney").hide();
    $("#refine-damson-chutney").hide();
    $("#refine-aromatic-spiced-plum-chutney").hide();
    $("#refine-spiced-apple-chutney").hide();

    //hide containers until selected by user items until clicked by user
    $(".marmalade-refine-container").hide();
    $(".refine-jelly-container").hide();
    $(".jams-refine-container").hide();
    $(".chutney-refine-container").hide();
    $(".hampers-refine-container").hide();


    $("#marmalades-button").click(function(){
    	$("#jams").hide();
    	$("#marmalades").show();
    	$("#jellies").hide();
    	$("#chutneys").hide();
    	$("#hampers").hide();

    	//hide unused container's selected product container
    	$(".marmalade-refine-container").show();
    	$(".select-product-indicator").hide();
    	$(".refine-jelly-container").hide();
    	$(".jams-refine-container").hide();
    	$(".chutney-refine-container").hide();
    	$(".hampers-refine-container").hide();
    });

    $("#jams-button").click(function(){
    	$("#jams").show();
    	$("#marmalades").hide();
    	$("#jellies").hide();
    	$("#chutneys").hide();
    	$("#hampers").hide();

    	//hide unused container's selected product container
    	$(".refine-jelly-container").hide();
    	$(".select-product-indicator").hide();
    	$(".marmalade-refine-container").hide();
    	$(".jams-refine-container").show();
    	$(".chutney-refine-container").hide();
    	$(".hampers-refine-container").hide();
    });

     $("#jellies-button").click(function(){
    	$("#jams").hide();
    	$("#marmalades").hide();
    	$("#jellies").show();
    	$("#chutneys").hide();
    	$("#hampers").hide();

    	//hide unused container's selected product container
    	$(".refine-jelly-container").show();
    	$(".select-product-indicator").hide();
    	$(".marmalade-refine-container").hide();
    	$(".jams-refine-container").hide();
    	$(".chutney-refine-container").hide();
    	$(".hampers-refine-container").hide();
    });

     $("#chutneys-button").click(function(){
    	$("#jams").hide();
    	$("#marmalades").hide();
    	$("#jellies").hide();
    	$("#chutneys").show();
    	$("#hampers").hide();

    	//hide unused container's selected product container
    	$(".refine-jelly-container").hide();
    	$(".select-product-indicator").hide();
    	$(".marmalade-refine-container").hide();
    	$(".jams-refine-container").hide();
    	$(".chutney-refine-container").show();
    	$(".hampers-refine-container").hide();
    });

    $("#hampers-button").click(function(){
    	$("#jams").hide();
    	$("#marmalades").hide();
    	$("#jellies").hide();
    	$("#chutneys").hide();
    	$("#hampers").show();

    	$(".refine-jelly-container").hide();
    	$(".select-product-indicator").hide();
    	$(".marmalade-refine-container").hide();
    	$(".jams-refine-container").hide();
    	$(".chutney-refine-container").hide();
    	$(".hampers-refine-container").show();
    });

    //refine marmalade
    $("#marmalade-whiskey-button").click(function(){
    	$("#refine-lemon-spiced-elderberry-vodka-marmalade").hide();
    	$("#refine-orange-marmalade-blackberry-brandy").hide();
    	$("#refine-lemon-lime-gin-marmalade").hide();
    	$("#refine-marmalade-whiskey").show();
    	$("#refine-oranag-damson-vodka-marmalade").hide();
    	$("#refine-lemon-beech-leaf-noyau-marmalade").hide();
    	$("#refine-orange-vanilla-marmalade").hide();
    	$("#refine-lemon-lime-sloe-gin-marmalade").hide();
    	$("#refine-orange-marmalade").hide();

    	$(".marmalade-refine-container").show();
    	$(".select-product-indicator").hide();
    });

    $("#lemon-lime-gin-button").click(function(){
    	$("#refine-lemon-spiced-elderberry-vodka-marmalade").hide();
    	$("#refine-orange-marmalade-blackberry-brandy").hide();
    	$("#refine-lemon-lime-gin-marmalade").show();
    	$("#refine-marmalade-whiskey").hide();
    	$("#refine-oranag-damson-vodka-marmalade").hide();
    	$("#refine-lemon-beech-leaf-noyau-marmalade").hide();
    	$("#refine-orange-vanilla-marmalade").hide();
    	$("#refine-lemon-lime-sloe-gin-marmalade").hide();
    	$("#refine-orange-marmalade").hide();

    	$(".marmalade-refine-container").show();
    	$(".select-product-indicator").hide();
    });

    $("#orange-marmalade-blackberry-brandy-button").click(function(){
    	$("#refine-lemon-spiced-elderberry-vodka-marmalade").hide();
    	$("#refine-orange-marmalade-blackberry-brandy").show();
    	$("#refine-lemon-lime-gin-marmalade").hide();
    	$("#refine-marmalade-whiskey").hide();
    	$("#refine-oranag-damson-vodka-marmalade").hide();
    	$("#refine-lemon-beech-leaf-noyau-marmalade").hide();
    	$("#refine-orange-vanilla-marmalade").hide();
    	$("#refine-lemon-lime-sloe-gin-marmalade").hide();
    	$("#refine-orange-marmalade").hide();

    	$(".marmalade-refine-container").show();
    	$(".select-product-indicator").hide();
    });

    $("#lemon-spiced-wild-elderberry-vodka-button").click(function(){
    	$("#refine-lemon-spiced-elderberry-vodka-marmalade").show();
    	$("#refine-orange-marmalade-blackberry-brandy").hide();
    	$("#refine-lemon-lime-gin-marmalade").hide();
    	$("#refine-marmalade-whiskey").hide();
    	$("#refine-oranag-damson-vodka-marmalade").hide();
    	$("#refine-lemon-beech-leaf-noyau-marmalade").hide();
    	$("#refine-orange-vanilla-marmalade").hide();
    	$("#refine-lemon-lime-sloe-gin-marmalade").hide();
    	$("#refine-orange-marmalade").hide();

    	$(".marmalade-refine-container").show();
    	$(".select-product-indicator").hide();
    });

    $("#orange-wild-damson-vodka-marmalade-button").click(function(){
    	$("#refine-lemon-spiced-elderberry-vodka-marmalade").hide();
    	$("#refine-orange-marmalade-blackberry-brandy").hide();
    	$("#refine-lemon-lime-gin-marmalade").hide();
    	$("#refine-marmalade-whiskey").hide();
    	$("#refine-lemon-beech-leaf-noyau-marmalade").hide();
    	$("#refine-oranag-damson-vodka-marmalade").show();
    	$("#refine-orange-vanilla-marmalade").hide();
    	$("#refine-lemon-lime-sloe-gin-marmalade").hide();
    	$("#refine-orange-marmalade").hide();

    	$(".marmalade-refine-container").show();
    	$(".select-product-indicator").hide();
    });

    $("#lemon-beechleaf-noyau-marmalade-button").click(function(){
    	$("#refine-lemon-spiced-elderberry-vodka-marmalade").hide();
    	$("#refine-orange-marmalade-blackberry-brandy").hide();
    	$("#refine-lemon-lime-gin-marmalade").hide();
    	$("#refine-marmalade-whiskey").hide();
    	$("#refine-oranag-damson-vodka-marmalade").hide();
    	$("#refine-lemon-beech-leaf-noyau-marmalade").show();
    	$("#refine-orange-vanilla-marmalade").hide();
    	$("#refine-lemon-lime-sloe-gin-marmalade").hide();
    	$("#refine-orange-marmalade").hide();

    	$(".marmalade-refine-container").show();
    	$(".select-product-indicator").hide();
    });

    $("#orange-vanilla-marmalade-button").click(function(){
    	$("#refine-lemon-spiced-elderberry-vodka-marmalade").hide();
    	$("#refine-orange-marmalade-blackberry-brandy").hide();
    	$("#refine-lemon-lime-gin-marmalade").hide();
    	$("#refine-marmalade-whiskey").hide();
    	$("#refine-oranag-damson-vodka-marmalade").hide();
    	$("#refine-lemon-beech-leaf-noyau-marmalade").hide();
    	$("#refine-orange-vanilla-marmalade").show();
    	$("#refine-lemon-lime-sloe-gin-marmalade").hide();
    	$("#refine-orange-marmalade").hide();

    	$(".marmalade-refine-container").show();
    	$(".select-product-indicator").hide();
    });

    $("#lemon-lime-sloe-gin-marmalade-button").click(function(){
    	$("#refine-lemon-spiced-elderberry-vodka-marmalade").hide();
    	$("#refine-orange-marmalade-blackberry-brandy").hide();
    	$("#refine-lemon-lime-gin-marmalade").hide();
    	$("#refine-marmalade-whiskey").hide();
    	$("#refine-oranag-damson-vodka-marmalade").hide();
    	$("#refine-lemon-beech-leaf-noyau-marmalade").hide();
    	$("#refine-orange-vanilla-marmalade").hide();
    	$("#refine-lemon-lime-sloe-gin-marmalade").show();
    	$("#refine-orange-marmalade").hide();

    	$(".marmalade-refine-container").show();
    	$(".select-product-indicator").hide();
    });

    $("#orange-marmalade-button").click(function(){
    	$("#refine-lemon-spiced-elderberry-vodka-marmalade").hide();
    	$("#refine-orange-marmalade-blackberry-brandy").hide();
    	$("#refine-lemon-lime-gin-marmalade").hide();
    	$("#refine-marmalade-whiskey").hide();
    	$("#refine-oranag-damson-vodka-marmalade").hide();
    	$("#refine-lemon-beech-leaf-noyau-marmalade").hide();
    	$("#refine-orange-vanilla-marmalade").hide();
    	$("#refine-lemon-lime-sloe-gin-marmalade").hide();
    	$("#refine-orange-marmalade").show();

    	$(".marmalade-refine-container").show();
    	$(".select-product-indicator").hide();
    });


    //Refine Jellies
    $("#gooseberry-vodka-jelly-button").click(function(){
    	$("#refine-gooseberry-vodka-jelly").show();
    	$("#refine-elderberry-port-jelly").hide();
    	$("#refine-honeyberry-jelly").hide();
    	$("#refine-redcurrent-jelly").hide();
    	$("#refine-spiced-apple-jelly").hide();
    });

    $("#elderberry-port-jelly-button").click(function(){
    	$("#refine-elderberry-port-jelly").show();
    	$("#refine-gooseberry-vodka-jelly").hide();
    	$("#refine-honeyberry-jelly").hide();
    	$("#refine-redcurrent-jelly").hide();
    	$("#refine-spiced-apple-jelly").hide();
    });

    $("#honeyberry-jelly-button").click(function(){
    	$("#refine-honeyberry-jelly").show();
    	$("#refine-elderberry-port-jelly").hide();
    	$("#refine-gooseberry-vodka-jelly").hide();
    	$("#refine-redcurrent-jelly").hide();
    	$("#refine-spiced-apple-jelly").hide();
    });

    $("#redcurrent-jelly-button").click(function(){
    	$("#refine-redcurrent-jelly").show();
    	$("#refine-honeyberry-jelly").hide();
    	$("#refine-elderberry-port-jelly").hide();
    	$("#refine-gooseberry-vodka-jelly").hide();
    	$("#refine-spiced-apple-jelly").hide();
    });

    $("#spiced-apple-jelly-button").click(function(){
    	$("#refine-spiced-apple-jelly").show();
    	$("#refine-redcurrent-jelly").hide();
    	$("#refine-honeyberry-jelly").hide();
    	$("#refine-elderberry-port-jelly").hide();
    	$("#refine-gooseberry-vodka-jelly").hide();
    });


    //Refined james
    $("#yellow-raspberry-conserve-button").click(function(){
    	$("#refine-yellow-raspberry-conserve").show();
    	$("#refine-mixed-berry-conserve").hide();
    	$("#refine-strawberry-conserve").hide();
    	$("#refine-raspberry-conserve").hide();
    });

    $("#mixed-berry-conserve-button").click(function(){
    	$("#refine-mixed-berry-conserve").show();
    	$("#refine-yellow-raspberry-conserve").hide();
    	$("#refine-strawberry-conserve").hide();
    	$("#refine-raspberry-conserve").hide();
    });

    $("#strawberry-conserve-button").click(function(){
     	$("#refine-strawberry-conserve").show();
     	$("#refine-mixed-berry-conserve").hide();
    	$("#refine-yellow-raspberry-conserve").hide();
    	$("#refine-raspberry-conserve").hide();
    });

    $("#raspberry-conserve-button").click(function(){
    	$("#refine-raspberry-conserve").show();
    	$("#refine-strawberry-conserve").hide();
    	$("#refine-mixed-berry-conserve").hide();
   		$("#refine-yellow-raspberry-conserve").hide();
    });

    //refine chutneys
    $("#pear-toasted-walnut-chutney-button").click(function(){
    	$("#refine-pear-toasted-walnut-chutney").show();
    	$("#refine-lightly-spiced-banana-chutney").hide();
    	$("#refine-damson-chutney").hide();
    	$("#refine-aromatic-spiced-plum-chutney").hide();
    	$("#refine-spiced-apple-chutney").hide();
    });

    $("#lightly-spiced-banana-chutney-button").click(function(){
    	$("#refine-lightly-spiced-banana-chutney").show();
    	$("#refine-pear-toasted-walnut-chutney").hide();
    	$("#refine-damson-chutney").hide();
    	$("#refine-aromatic-spiced-plum-chutney").hide();
    	$("#refine-spiced-apple-chutney").hide();
    });

    $("#damson-chutney-button").click(function(){
    	$("#refine-damson-chutney").show();
    	$("#refine-pear-toasted-walnut-chutney").hide();
    	$("#refine-lightly-spiced-banana-chutney").hide();
    	$("#refine-aromatic-spiced-plum-chutney").hide();
    	$("#refine-spiced-apple-chutney").hide();
    });

    $("#aromatic-spiced-plum-chutney-button").click(function(){
    	$("#refine-aromatic-spiced-plum-chutney").show();
    	$("#refine-damson-chutney").hide();
    	$("#refine-pear-toasted-walnut-chutney").hide();
    	$("#refine-lightly-spiced-banana-chutney").hide();
    	$("#refine-spiced-apple-chutney").hide();
    });

    $("#spiced-apple-chutney-button").click(function(){
    	$("#refine-spiced-apple-chutney").show();
    	$("#refine-aromatic-spiced-plum-chutney").hide();
    	$("#refine-damson-chutney").hide();
    	$("#refine-pear-toasted-walnut-chutney").hide();
    	$("#refine-lightly-spiced-banana-chutney").hide();
    });
});