<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4>Dibawah Ini Adalah Data Department</h4>
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

            },
            error: function (jqXHR, textstatus, errorMsg) {
                alert('Error : ' + errorMsg);
            }
        })
    }

    loadKonten('http://localhost/backend_inventory_4133/department/list_department');
</script>