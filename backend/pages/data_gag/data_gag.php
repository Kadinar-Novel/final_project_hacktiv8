<?php
	if(!isset($_SESSION['login_user'])){
		header('location: ../../login.php'); // Mengarahkan ke Home Page
	}

	//link buat paging
	$linkaksi = 'index.php?page=data_gag';

	if(isset($_GET['act']))
	{
		$act = $_GET['act'];
		$linkaksi .= '&act=$act';
	}
	else
	{
		$act = '';
	}

	$aksi = 'pages/data_gag/act_data_gag.php';

	switch ($act) {
		case 'form':
			if(!empty($_GET['id']))
			{
				$act = "$aksi?page=data_gag&act=edit";
				$query = mysqli_query($conn, "SELECT * FROM data_gag WHERE idGag = '$_GET[id]'");
				$temukan = mysqli_num_rows($query);
				if($temukan > 0)
				{
					$c = mysqli_fetch_assoc($query);
				}
				else
				{
					header("location:index.php?page=data_gag");
				}

			}
			else
			{
				$act = "$aksi?page=data_gag&act=simpan";
			}

		echo"<div class='col-md-12'>
          <div class='box box-primary'>
            <div class='box-header with-border'>
              <h3 class='box-title'> Content</h3>
			</div>";
			
            echo"<form role='form'  method='POST' action='$act' enctype='multipart/form-data'> 
              <div class='box-body'>
                <div class='form-group'>
                  
                  <input type='hidden' class='form-control' name='id' value='"?><?php echo isset($c['idGag']) ? $c['idGag'] : '';?><?php echo"'"?> <?php echo isset($c['idGag']) ? ' readonly' : ' ';?><?php echo" >
								</div>
					<div class='form-group'><label >JUDUL PIC</label>
					<input type='text' class='form-control' placeholder='Judul Pic' name='judul_pic' value='"?><?php echo isset($c['judul_pic']) ? $c['judul_pic'] : '';?><?php echo"'"?> <?php echo isset($c['judul_pic']) ? ' ' : ' ';?><?php echo" >
										</div>
					<div class='form-group'><label >PIC</label>
					"?><?php echo isset($c['pic']) ? "<img src='../images/".$c['pic']."' width='100px' height='100px'> <input type='file' class='form-control' placeholder='Pic' name='pic' value=''>" : "<input type='file' class='form-control' placeholder='Pic' name='pic' value=''>"; ?><?php echo "
										</div>
					<div class='form-group'><label >KATEGORI</label>
					<input type='text' class='form-control' placeholder='Kategori' name='kategori' value='"?><?php echo isset($c['kategori']) ? $c['kategori'] : '';?><?php echo"'"?> <?php echo isset($c['kategori']) ? ' ' : ' ';?><?php echo" >
										</div><div class='box-footer'>
					<button type='submit' class='btn btn-primary'>Submit</button> <button type='button' class='btn btn-primary' onclick='history.back()'><i class='fa fa-rotate-left'></i> Kembali</button>
				</div>
			  </div>			
            </form>
          </div>
        </div>
		";
		break;

		default :
		echo"
		<div class='col-xs-12'>
         <div class='box'>
            <div class='box-header'>
              <h3 class='box-title'>Content</h3><br/>
			  <small>Input Content</small><br/><br/>
			  <a href='index.php?page=data_gag&act=form' class='w3-btn w3-big w3-blue' style='font-size:16px'><i class='fa fa-file'></i> ADD DATA</a>
            </div>
            <div class='box-body'>
              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
					<th>No</th>
						<th>JUDUL PIC</th>
						<th>PIC</th>
						<th>KATEGORI</th>
						<th>Action</th>
                </tr>
                </thead>
                <tbody>";
				$query = "SELECT * FROM data_gag ";
				$sql_kul = mysqli_query($conn, $query);
				$fd_kul = mysqli_num_rows($sql_kul);
				
				if($fd_kul > 0)
				{
					$no =  1;
					while ($m = mysqli_fetch_assoc($sql_kul)) {
						echo"<tr>
						
							<td>$no</td>
							<td>$m[judul_pic]</td>
							<td><img src='../frontend/src/images/".$m['pic']."' width='50px' height='50px'></td>
							<td>$m[kategori]</td>
							<td><a href='index.php?page=data_gag&act=form&id=$m[idGag]'><i class='fa fa-pencil-square w3-large w3-text-blue'></i></a> 
							<a href='$aksi?page=data_gag&act=hapus&id=$m[idGag]' onclick=\"return confirm('Are You sure want to delete?');\"><i class='fa fa-trash w3-large w3-text-red'></i></a></td>
						
						</tr>";
						$no++;
					}
				}
				else
				{
					echo"<tr>
						<td colspan='5'><div class='w3-center'><i>Data Content Not Found.</i></div></td>
					</tr>";
				}
				
				
                echo "</tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
          </div>
        </div>";

		break;
	}

	
?>