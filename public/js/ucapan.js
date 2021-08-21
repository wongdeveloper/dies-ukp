$('#modal-ucapan-foto').on('hidden.bs.modal', function () {
        $('#Msg_Form')[0].reset();
        $('#kategori').val('0');
        // $('#form-radio-lk').attr('hidden', true);
        // $('#form-lk1').attr('required', false);
        // $('#form-list-lk').attr('hidden', true);
        // $('#list-lk').attr('required', false);
        $('#formJurusan').attr('hidden', true);
        $('#inputJurusan').attr('required', false);
        $('#formAngkatan').attr('hidden', true);
        $('#inputAngkatan').attr('required', false);
        // $('#formLK').attr('hidden', true);
        // $('#inputLK').attr('required', false);
        $('#formMsg').attr('hidden', true);
    });

    $(document).ready(function () {
        
        // $('#btnadd').click(function () {
        //     if ($('#kategori').val() == "0" && $('#inputNama').val() == '') {
        //         alert("Mohon memasukkan kategori dan nama");
        //     }else if($('#kategori').val() == "0" && $('#inputNama').val() != ''){
        //         alert("Mohon memasukkan kategori");
        //     }else if($('input[name=lk]:checked', '#Msg_Form').val() == '1' && $('#list-lk').val() == '0'){
        //         alert("Mohon memilih list LK");
        //     }     
        // });
        $('#kategori').change(function () {
            // $('#form-radio-lk').attr('hidden', true);
            // $('#form-lk1').attr('required', false);
            // $('#form-list-lk').attr('hidden', true);
            // $('#list-lk').attr('required', false);
            $('#formJurusan').attr('hidden', true);
            $('#inputJurusan').attr('required', false);
            $('#formAngkatan').attr('hidden', true);
            $('#inputAngkatan').attr('required', false);
            // $('#formLK').attr('hidden', true);
            // $('#inputLK').attr('required', false);
            $('#formMsg').attr('hidden', true);
            $('#formKategori2').attr('hidden', true);
            $('#inlineRadio1').attr('required', false);
            $('#formKategoriinput2').attr('hidden', true);
            $('#inputdetail2').attr('required', false);
            var data = $(this).val();
            if (data == 1) {
                $('#formJurusan').attr('hidden', false);
                $('#inputJurusan').attr('required', true);
                $('#formAngkatan').attr('hidden', false);
                $('#inputAngkatan').attr('required', true);
                $('#formMsg').attr('hidden', false);
            } else if (data == 2) {
                $('#formMsg').attr('hidden', false);
                $('#formKategori2').attr('hidden', false);
                $('#inlineRadio1').attr('required', true);
                $('#formKategoriinput2').attr('hidden', false);
                $('#inputdetail2').attr('required', true);
            } else if (data == 3) {
                $('#formJurusan').attr('hidden', false);
                $('#inputJurusan').attr('required', true);
                $('#formAngkatan').attr('hidden', false);
                $('#inputAngkatan').attr('required', true);
                $('#formMsg').attr('hidden', false);
            } else if (data == 4) {
                $('#formMsg').attr('hidden', false);
            } else if (data == 5) {
                $('#formMsg').attr('hidden', false);
            }
        });
        $('#Msg_Form input[name=detail1]').on('change', function () {
            var detail1 = $('input[name=detail1]:checked', '#Msg_Form').val();
            $('#labelinputdetail2').text(detail1);
            $('#inputdetail2').attr('placeholder', 'Masukkan ' + detail1);
        });
        $('#inputMsg').keyup(function () { 
            var string = $('#inputMsg').val();
            string = string.replace(/\s+/g, ' ');
            $('#inputMsg').val(string);
        });
        $('#inputjudulMsg').keyup(function () { 
            var string = $('#inputjudulMsg').val();
            string = string.replace(/\s+/g, ' ');
            $('#inputjudulMsg').val(string);
        });
    });

    