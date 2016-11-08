<div class="modal-dialog">
    <div class="modal-content">
        <form onsubmit="return false">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">close&times;</button>
            <div class="module-body table">
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                    <thead>
                        <tr>
                            <th>Serial Num</th>
                            <th>Nama</th>
                            <th>Pilih</th>
                        </tr>
                    </thead>
                    <tbody>
                    <form>
                        <?php
                        include 'koneksi.php';
                        $result = mysql_query("SELECT serial_num, nama from barang where status='OK'");
                        $no = 1;
                        $word1 = "inputAlat";
                        $word2 = "tombolAlat_";
                        $kode1 = "";
                        $kode2 = "";
                        while ($r = mysql_fetch_array($result)) {
                            $kode1 = $word1 . $no;
                            $kode2 = $word2 . $no;
                            echo "
                                        <tr>
                                            <td align=center>$r[serial_num]</td>
                                            <td align=center>$r[nama]</td>
                                            <td align=center>
                                            <button class='input-group-addon btn btn-danger form-control' id='$kode2' data-dismiss='modal' aria-hidden='true'";
                            $barang = $r['serial_num'];
                            $js = ' onclick="tampilkanAlat(\'' . $barang . '\')">';
                            echo $js;
                            echo "<span>Pilih</span>
                                            </button>
                                            </td>
                                        <input type='hidden' id='$kode1' value='$r[serial_num]'/>
                                        </tr>";
                            $word = "";
                            $no++;
                        }
                        ?>
                    </form>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Serial Num</th>
                            <th>Nama</th>
                            <th>Pilih</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </form>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
<script>
    function tampilkanAlat(clr) {
        document.getElementById("hasilAlat").value = clr;
        document.frm.txt10.disabled = false;
    }
</script>