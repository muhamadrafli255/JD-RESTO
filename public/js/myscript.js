$(document).ready(function(){
    $('#orderNow').click(function(){
        $('#containerHero').addClass('d-none')
        $('#containerOrder').removeClass('d-none')
    })

    $('#backToHome').click(function() {
        $('#containerHero').removeClass('d-none')
        $('#containerOrder').addClass('d-none')
    })

    $('#newOrder').click(function() {
        $('#containerOrder').addClass('d-none')
        $('#containerNewOrder').removeClass('d-none')
    })

    $('#backToOrder').click(function() {
        $('#containerNewOrder').addClass('d-none')
        $('#containerOrder').removeClass('d-none')
    })

    $('#backToOrder2').click(function() {
        $('#containerEatInHere').addClass('d-none')
        $('#containerNewOrder').removeClass('d-none')
    })

    $('#eatInHere').click(function() {
        $('#containerNewOrder').addClass('d-none')
        $('#containerEatInHere').removeClass('d-none')
    })
})