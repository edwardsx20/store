app.controller("MainController", function($scope,DataManager,CartManager){
    $scope.cart = CartManager.getCart(); 

    $scope.addToCart = function(elem){
        //var tempProduct = CartManager.getById(elem.id); 
        console.log('ID:');
        console.log(elem);
        var tempProduct = CartManager.getById(elem); 
        console.log(tempProduct);
        if(tempProduct) {
            tempProduct.cantidad++;
        }
        else {
            elem.cantidad = 1;
            CartManager.addProduct(elem);
        }
        $scope.updateCart();
    }

    $scope.removeFromCart = function(elem){
        var tempProduct = CartManager.getById(elem.id); 
        if(tempProduct && tempProduct.cantidad > 1) {
            tempProduct.cantidad--;
        }
        else {
            CartManager.removeProduct(elem);
        }
        $scope.updateCart();
    }

    $scope.updateCart = function() {
        var sumTotal = 0;
        var sumProducts = 0;
        angular.forEach($scope.cart.products, function(elem){
            sumProducts += parseInt(elem.cantidad);
            sumTotal += parseInt(elem.precio * elem.cantidad);
        });
        $scope.cart.total = sumTotal;
        $scope.cart.quantity = sumProducts;
    }
})