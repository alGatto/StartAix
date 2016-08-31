/**
 * Created by algattuso on 31/08/2016.
 */
$('#how').change(function(){
    var selected_item = $(this).val()
    if(selected_item == "Dir" || selected_item == "Student"){
        $('#formation').val("").removeClass('hidden');
        $('#label-formation').val("").removeClass('hidden');
        $('#formation').prop('required',true);

        $('#level').val("").removeClass('hidden');
        $('#label-level').val("").removeClass('hidden');
        $('#level').prop('required',true);
    }else{
        $('#formation').val(selected_item).addClass('hidden');
        $('#label-formation').val(selected_item).addClass('hidden');
        $('#formation').prop('required',false);

        $('#level').val(selected_item).addClass('hidden');
        $('#label-level').val(selected_item).addClass('hidden');
        $('#level').prop('required',false);
    }
});