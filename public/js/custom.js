$("#booking_form").submit(function(e) {
    e.preventDefault()
    let check_in_date = $("#checkin-date").val()
    let check_out_date = $("#checkout-date").val()
    let check_in_time = $("#checkin-time").val()
    let check_out_time = $("#checkout-time").val()
    console.log(check_in_date, check_out_date, check_in_time, check_out_time)
    
})