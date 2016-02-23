app.factory("Data", ['$http',
	function ($http) { // This service connects to our REST API

		var serviceBase = 'api/v1/';

		var obj = {};

		obj.get = function (q) {
			return $http.get(serviceBase + q).then(function (results) {
				return results.data;
			});
		};
		obj.post = function (q, object) {
			return $http.post(serviceBase + q, object).then(function (results) {
				return results.data;
			});
		};
		obj.put = function (q, object) {
			return $http.put(serviceBase + q, object).then(function (results) {
				return results.data;
			});
		};
		obj.delete = function (q) {
			return $http.delete(serviceBase + q).then(function (results) {
				return results.data;
			});
		};

		return obj;
	}])
.factory("DataManager", function($http){
	var serviceBase = '/api/v1/';

	return {
		getCustomerProducts: function(){
			return $http.get(serviceBase + 'products').then(function(response){
				return response.data;
			});
		}
	};
})
.factory("CartManager", function($http){
	var cart = {
		id: '',
		products: [],
		quantity: 0
	}

	return {
		getCart: function() { 
			return cart; 
		},
		addProduct: function(elem) { 
			cart.products.push(elem); 
		},
		removeProduct: function(elem) {
			delete elem; 
		},
		getById: function(id){
			var result = cart.products.filter(function(elem){
				return elem.id == id;
			});

			return (result.length > 0 ? result[0] : false);
		}
	};
});