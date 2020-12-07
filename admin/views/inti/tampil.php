<div class="row">
    <div class="float-left">
        <h4>Daftar Barang</h4>
    </div>
    <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="index.php?mod=inti&page=search" method="POST">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" name="nt" placeholder="Search for ...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="submit" name="submit" value="cari"><i class="fa fa-search"></i></button></div>
                            </div>
                        </form>
    <div class="float-right">
        <a href="index.php?mod=inti&page=add">
            <button class="btn btn-primary">Add</button>
        </a>
    </div>
</div>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <td>
                    #
                </td>
                <td>Nama Barang</td><td>Harga</td><td>Jenis Barang</td><td>Nama Pemasok</td><td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php if($penyedia != NULL){ 
                $no=1;
                foreach($penyedia as $row){?>
                    <tr>
                        <td><?=$no;?></td><td><?=$row['nama_barang']?></td><td><?=$row['harga'];?></td><td><?=$row['jenis_barang']?></td>
                        <td><?=$row['nama_pemasok']?></td>
                        <td>
                            <a href="index.php?mod=inti&page=edit&id=<?=md5($row['id_barang'])?>"><i class="fa fa-edit"></i> </a>
                            <a href="index.php?mod=inti&page=delete&id=<?=md5($row['id_barang'])?>" onclick="javascript: return confirm('Hapus data?')"><i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
               <?php $no++; }
            }?>
        </tbody>
    </table>
</div>