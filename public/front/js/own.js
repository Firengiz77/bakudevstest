function addtoWish(url, kurslars_id) {

    var form = new FormData();
    form.append('kurslars_id', kurslars_id);
  
    fetch(url, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'accept': 'application/json'
        },
        body: form,
    })
        .then(response => response.json())
        .then(function (response) {
            console.log(response);
            console.log(response.message);
            console.log(response.count);
           $('#addtowish').html(response.count);
            alertify.set('notifier','position', 'bottom-right');
            alertify.notify(response.message,'custom', 2);
        });
}

