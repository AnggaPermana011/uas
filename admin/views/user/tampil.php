<div class="row">
    <div class="pull-left">
        <h4>Daftar Pemasok</h4>
    </div>
    <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="index.php?mod=user&page=search" method="POST">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" name="nt" placeholder="Search for ...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="submit" name="submit" value="cari"><i class="fa fa-search"></i></button></div>
                            </div>
                        </form>
    <div class="pull-right">
        <a href="index.php?mod=user&page=add">
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
                <td>Nama Pemasok</td><td>Alamat</td><td>No HP</td><td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php if($user != NULL){ 
                $no=1;
                foreach($user as $row){?>
                    <tr>
                        <td><?=$no;?></td><td><?=$row['nama_pemasok']?></td><td><?=$row['alamat'];?></td><td><?=$row['no_hp']?></td>                 
                        <td>
                            <a href="index.php?mod=user&page=edit&id=<?=md5($row['id_pemasok'])?>"><i class="fa fa-edit"></i> </a>
                            <a href="index.php?mod=user&page=delete&id=<?=md5($row['id_pemasok'])?>" onclick="javascript: return confirm('Hapus data?')"><i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
               <?php $no++; }
            }?>
        </tbody>
    </table>
</div>