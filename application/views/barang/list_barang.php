<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                
                <a href="#" onclick="loadMenu('<?= base_url('barang/form_create')?>')" class="btn btn-primary">Tambah Data Barang</a>

                <hr>          

                <h4>Dibawah Ini Adalah Data Barang</h4>
                <table id="table_barang" class="table"> 
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    function loadKonten(url) {
        $.ajax(url, {
            type: 'GET',
            success: function (data, status, xhr) {
                var objData = JSON.parse(data);

                $('#table_barang').html(objData.konten);

                reload_event();
            },
            error: function (jqXHR, textstatus, errorMsg) {
                alert('Error : ' + errorMsg);
            }
        })
    }

    function reload_event() {
        $('.linkEditBarang').on('click', function () {
            var hashClean = this.hash.replace('#', '');
            loadMenu('<?= base_url('barang/form_edit/')?>' + hashClean);
        });

        $('.linkHapusBarang').on('click', function () {
            var hashClean = this.hash.replace('#', '');
            hapusData(hashClean);
        });
    }

    function hapusData(id_barang) {
        var url = 'http://localhost/backend_inventory_4133/barang/delete_data?id_barang='+id_barang;

        $.ajax(url, {
            type: 'GET',
            success: function (data, status, xhr) {
                var objData = JSON.parse(data);
                alert(objData ['pesan'] );
                loadKonten('http://localhost/backend_inventory_4133/barang/list_barang');
            },
            error: function (jqXHR, textStatus, errorMsg) {
                alert('Error: ' +errorMsg);
            }
        })
    }

    loadKonten('http://localhost/backend_inventory_4133/barang/list_barang');
</script>