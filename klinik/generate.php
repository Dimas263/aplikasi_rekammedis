<?php include_once('../_header.php');?>

        <div id="loginbox" class="mainbox col-lg-12">
            <div class="panel panel-default" align="center" style="background-color: #ffffff; color: #292826;margin-top: 75px;">
                <div class="panel-body">
                    <div align="center" style="margin-top: 35px;">
                        <form action="add " method="post" >
                            <img class="gambar" align="center" src="https://img.icons8.com/color/48/000000/ambulance.png"/></img>
                            <br/><br/>
                            <center style="color: #1e2425;"><h2>Data Poliklinik</h2></center>
                            <br/>
                            <div class="input-group">
                                <input type="text" name="count_add" id="count_add" maxlength="2" pattern="[0-9]+" class="form-control text-center" placeholder="Masukan jumlah data" style="margin-left: 40%;margin-right: 40%" required>
                            </div>
                            <br/><br/>
                            <div class="form-group">
                                <a href="data " class="btn btn-light" style="background-color: #f4d35e;color : #1e2425;font-weight:bold;margin:5px">&nbsp;Batal&nbsp;&nbsp;</a>
                                <input type="submit" name="generate" value"Generate" class="btn btn-light" style="background-color : #0fa3b1;color : #efeeee;font-weight:bold;margin:5px">
                            </div>
                        </form>
                        <br/><br/><br/>
                    </div>
                </div>
            </div>
        </div>  

<?php include_once('../_footer.php');?>