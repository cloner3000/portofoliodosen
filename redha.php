<!-- REDHA -->

<div id="myModaldetail" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Riwayat Data Pegawai</h4>
            </div>
            <div class="modal-body">
							<h4 class="modal-title"  id="detail-nip"></h3>
              <ul class="nav nav-tabs">
								<li class="active"><a href="#Personal" data-toggle="tab"> Data Personal</a></li>
								<li class=""><a href="#Pendidikan" data-toggle="tab">Riwayat Pendidikan</a></li>
								<li class=""><a href="#Pangkat" data-toggle="tab">Riwayat Pangkat</a></li>
								<li class=""><a href="#Jabatan" data-toggle="tab">Riwayat Jabatan</a></li>
								<li class=""><a href="#Kerja" data-toggle="tab">Riwayat Unit Kerja</a></li>
                <li class=""><a href="#Mengajar" data-toggle="tab">Riwayat Mengajar</a></li>
                <li class=""><a href="#Bimbingan" data-toggle="tab">Riwayat Bimbingan</a></li>
              </ul>

              <div class="tab-content">
  							<div class="tab-pane fade  active in" id="Personal">
									<div class="row">
										<div class="col-md-12">
												<div class="card ">
														<div class="content">
                              <form id="form_data_personal">
															  <div class="row">
															<div class="col-md-12">
															<div class="form-horizontal">
														 			 <label class="col-md-3 col-xs-12 control-label">Nama Lengkap</label>
														 			 <div class="col-md-6 col-xs-12">
														 					 <!-- <label class="form-control" id="dtl_nama"> </label> -->
                                       <input placeholder="Title" name="nama" class="form-control" id="dtl_nama" type="text" required="">
														 			 </div>
														 	 </div>
														 </div>
													 </div>
													   <div class="row">
														 <div class="col-md-12">
															 <div class="form-horizontal">
 														 			 <label class="col-md-3 col-xs-12 control-label">Tempat Lahir</label>
 														 			 <div class="col-md-6 col-xs-12">
 														 					 <!-- <label class="form-control" id="dtl_tmp_lahir"></label> -->
                                       <input placeholder="Title" name="tempat_lahir" class="form-control" id="dtl_tmp_lahir" type="text" required="">
 														 			 </div>
 														 	 </div>
														 </div>
													 </div>
													   <div class="row">
														<div class="col-md-12">
															 <div class="form-horizontal">
 														 			 <label class="col-md-3 col-xs-12 control-label">Tanggal Lahir</label>
 														 			 <div class="col-md-6 col-xs-12">
 														 					 <!-- <label class="form-control" id="dtl_tgl_lahir"> </label> -->
                                        <input placeholder="Title" name="tgl_lahir" class="form-control" id="dtl_tgl_lahir" type="text" required="">
 														 			 </div>
 														 	 </div>
														</div>
                          </div>
                           <div class="row">
                            <div class="col-md-12">
          										<div class="form-horizontal">
          												 <label class="col-md-3 col-xs-12 control-label">Keahlian</label>
          												 <div class="col-md-6 col-xs-12">
          														 <!-- <label class="form-control" id="dtl_nama"> </label> -->
                                        <input placeholder="Title" type="text" name="keahlian" id="dtl_keahlian" class=" form-control typeahead" required="" />
          												 </div>
          										 </div>

          							</div>
													</div>
                          <div class="col-md-9">
                          <button type="submit" id="tombolsimpan" class="btn btn-info btn-fill pull-right">Save</button>
                        </form>
                        </div>
                          <div class="clearfix"></div>
													</div>

												</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade " id="Pendidikan">
									<div class="row">
										<div class="col-md-12">
												<div class="card ">
														<div class="content">
															<table id="table_riwayat_pendidikan" class="table table-striped">
																 <thead>
																		<tr>
																			 <th>No.</th>
																			 <th>Jenjang</th>
																			 <th>Jurusan/Institusi</th>
																			 <th>No./Tgl. Ijazah</th>
																		</tr>
																 </thead>
																 <tbody>

																 </tbody>
																</table>
														</div>
												</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade " id="Pangkat">
									<div class="row">
										<div class="col-md-12">
												<div class="card ">
														<div class="content">
															<table id="table_riwayat_pangkat" class="table table-striped">
															   <thead>
															      <tr>
															         <th>No.</th>
															         <th>Status Pengangkatan</th>
															         <th>Pangkat</th>
															         <th>Gol.</th>
															         <th>TMT</th>
															         <th>Nomor/Tgl. SK</th>
															         <th>MK Th</th>
															         <th>MK Bl</th>
															         <th>Pejabat Penetap</th>
															      </tr>
															   </thead>
															   <tbody>

															   </tbody>
															</table>

														</div>
												</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade " id="Jabatan">
									<div class="row">
										<div class="col-md-12">
												<div class="card ">
														<div class="content">
															<table id="" class="table table-striped">
															   <thead>
															      <tr>
															         <th>No.</th>
															         <th>Jabatan/Level</th>
															         <th>No./Tgl. SK</th>
															         <th>Pejabat Penetap/NIP</th>
															         <th>TMT</th>
															         <th>No./Tgl. Lantik</th>
															      </tr>
															   </thead>
															   <tbody>

															   </tbody>
															</table>
														</div>
												</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade " id="Kerja">
									<div class="row">
										<div class="col-md-12">
												<div class="card ">
														<div class="content">
															<table id="" class="table table-striped">
   <thead>
      <tr>
         <th>No.</th>
         <th>Unit Kerja</th>
         <th>No./Tgl. SK</th>
         <th>Pejabat Penetap/NIP</th>
         <th>TMT</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td>
            1
         </td>
         <td id="riwayat_unit">
            Fakultas Pertanian
         </td>
         <td>
            <br>
         </td>
         <td>
            <br>
         </td>
         <td>
         </td>
      </tr>
   </tbody>
</table>
														</div>
												</div>
										</div>
									</div>
								</div>

                <div class="tab-pane fade " id="Mengajar">
									<div class="row">
										<div class="col-md-12">
												<div class="card ">
														<div class="content">
                              <div class="col-md-12 pull-left">
          										<div class="form-horizontal">
          												 <label class="col-md-1 col-xs-1 control-label">Tahun Angkatan</label>
          												 <div class="col-md-6 col-xs-12">
          														 <!-- <label class="form-control" id="dtl_nama"> </label> -->
           														<select id="select_riwayat_mengajar" class="form-control">
           														</select>
          												 </div>
          										 </div>

          							</div>
                        <br>
                        <br>
															<table id="table_riwayat_mengajar" class="table table-striped">
                                 <thead>
                                    <tr>
                                       <th>No.</th>
                                       <th>Tahun</th>
                                       <th>Kode MK</th>
                                       <th>Nama Mata Kuliah</th>
                                       <th>Kelas</th>
                                       <th>Program</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 </tbody>
                              </table>
														</div>
												</div>
										</div>
									</div>
								</div>

                <div class="tab-pane fade " id="Bimbingan">
									<div class="row">
										<div class="col-md-12">
												<div class="card ">
														<div class="content">
                              <div class="col-md-12 pull-left">
                              <div class="form-horizontal">
                                   <label class="col-md-1 col-xs-1 control-label">Semester</label>
                                   <div class="col-md-6 col-xs-12">
                                       <!-- <label class="form-control" id="dtl_nama"> </label> -->
                                      <select id="select_riwayat_bimbingan" class="form-control">
                                      </select>
                                   </div>
                               </div>

                        </div>
                        <br>
															<table id="table_riwayat_bimbingan" class="table table-striped">
                                 <thead>
                                    <tr>
                                      <th>No.</th>
                                      <th>Program Studi</th>
                                      <th>Program</th>
                                      <th>NIM</th>
                                      <th>Nama Mahasiswa</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 </tbody>
                              </table>
														</div>
												</div>
										</div>
									</div>
								</div>

                    </div>



            </div>

        </div>
    </div>
</div>
<!-- end of redha -->
