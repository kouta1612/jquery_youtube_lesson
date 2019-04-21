$(document).ready(function () {

  var $orders = $('#orders');
  var $name = $('#name');
  var $drink = $('#drink');

  var orderTemplate = $('#order-template').html();

  function addOrder(order) {
    $orders.append(Mustache.render(orderTemplate, order));
  }

  $.ajax({
    type: 'GET',
    url: '/api/orders',
    success: function (orders) {
      $.each(orders, function (i, order) {
        addOrder(order);
      });
    },
    error: function () {
      alert('error loading orders');
    }
  });

  $('#add-order').on('click', function () {

    var count = 3;
    var order = {
      id: count,
      name: $name.val(),
      drink: $drink.val()
    };

    count++;

    $.ajax({
      type: 'POST',
      url: '/api/orders',
      data: order,
      success: function (newOrder) {
        addOrder(newOrder);
      },
      error: function () {
        alert('error saving message');
      }
    });
  });

  $orders.on('click', '.remove', function () {

    var $li = $(this).closest('li');

    $.ajax({
      type: 'DELETE',
      url: '/api/orders/' + $(this).attr('data-id'),
      success: function (data) {
        $li.remove();
      },
      error: function () {
        alert('error deleting');
      }
    });
  });
});
