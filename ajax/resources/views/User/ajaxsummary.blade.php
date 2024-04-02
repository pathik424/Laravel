{{--

1. Create Modal
2. Create ID on modal title id="modal-title"
3. Create ID on modal title id="saveBtn""
4.  Script $(document).ready(function() {
            //    alert('here') // First Check Network Console run or Not
5. upar 2 ane 3 number ma je id apya che ema html code add karvano
        $('#modal-title').html('Create User');
            $('#saveBtn').html('Save User');
6. Save button par Je ID Apyu Ena Par Clicked Karine Joi levanu Console ma Clicked Ave che ke nai
            $('#saveBtn').click(function(){
                console.log('clicked')
            })
7. Save Button par Console log ma ave che ke nai e check karvanu id=savebtn
             $('#saveBtn').click(function(){
                // console.log('clicked')
                var name = $('#name').val();
                console.log(name)
            })

8. Create Karyu With Help of Form ma Id apyu AjaxForm

             var form = $('#ajaxForm')[0];
            $('#saveBtn').click(function(){
                // console.log('clicked')

                // var name = $('#name').val();
                // var email = $('#email').val();
                // var type = $('#type').val();

                // console.log(type)

                var form = new FormData(form);
                console.log(form)
9. CSRF Token in ! HTML Meta File add for Ajax

    <meta name="csrf-token" content="{{ csrf_token() }}" />


    add in Script data

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

10. After Submiting Success nu pop pup avi jase

                      success: function(response) {
                        // console.log(res)
                        // console.log(response.success) // check to user controller return jason success message

                        if(ressponse)
                         swal("success", response.success, "success"); // sweat alert in serch google  mathi upadyu




--}}
