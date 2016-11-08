<div class="modal-dialog">
    <div class="modal-content">
        <form onsubmit="return false">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Pilih Alat Untuk Dipinjam</h4>
            </div>
            <div class="module-body table">
                <table id="table_id" cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped"
                       width="100%">
                    <thead>
                        <tr>
                            <th>Nama Alat</th>
                            <th>Pilih</th>
                        </tr>
                    </thead>
                    <tbody>
                    <form>
                        <?php
                        include 'koneksi.php';
                        $result = mysql_query("SELECT nama from barang group by nama");
                        $no = 1;
                        $word1 = "5inputAlat";
                        $word2 = "tombolAlat_5_";
                        $kode1 = "";
                        $kode2 = "";
                        while ($r = mysql_fetch_array($result)) {
                            $kode1 = $word1 . $no;
                            $kode2 = $word2 . $no;
                            echo "
                                        <tr>
                                            <td align=center>$r[nama]</td>
                                            <td align=center>
                                            <button class='input-group-addon btn btn-danger form-control' id='$kode2' data-dismiss='modal' aria-hidden='true'";
                            $barang = $r['nama'];
                            $js = ' onclick="tampilkanAlat5(\'' . $barang . '\')">';
                            echo $js;
                            echo "</button>
                                            </td>
                                        <input type='hidden' id='$kode1' value='$r[nama]'/>
                                        </tr>";
                            $word = "";
                            $no++;
                        }
                        ?>
                    </form>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nama Alat</th>
                            <th>Pilih</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </form>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
<script>
    function tampilkanAlat5(clr) {
        document.getElementById("hasilAlat5").value = clr;
        document.getElementById("btn6").disabled = false;
        document.frm.txt6.disabled = false;
    }
</script>