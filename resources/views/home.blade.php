    @extends('main')

    @section('title', 'Dashboard')
    

    @section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
    </div>

    @endsection

    @section('content')
    <center> <h1  class="h3 mb-2 text-gray-800">Angket Kepuasan Dosen dan Tenaga Kependidikan</h1></center>
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Form Angket</strong>
                    </div>
                    <div class="card-body">
                      <div class="row"><div class="col-sm-12 col-md-6">         
                    </div>
                </div>
              <form action="/home/data" method="POST">
                  @csrf
                  <table  class="table table-bordered">
                    <thead>
                      <tr>
                          
                        <th><center>nomor</center></th>
                        <th><center>pernyataan</center></th>
                        <th><center>Jawaban</center></th>
                                                      
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td >
                            <br>
                              <center>1</center>
                          </td>
                          <td >
                            <br>
                              <center>Jurusan TIK memberikan informasi dan menyelenggarakan layanan kenaikan
                                jenjang karir.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio" name="radios1" class="form-check-input" value="Sangat Puas">Sangat puas
                                </label>
  
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios1" class="form-check-input" value="Puas">Puas
                                </label>
  
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios1" class="form-check-input" value="Tidak Puas">Tidak puas
                                </label>        
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios1" class="form-check-input" value="Sangat Tidak Puas"> Sangat Tidak puas
                                </label>                             
                          </td>
                          
                      </tr>
  
                      <tr>
                        <td >
                          <br>
                            <center>2</center>
                        </td>
                        <td >
                          <br>
                            <center>Saya mendapatkan dukungan untuk mengikuti kursus/pelatihan yang dibutuhkan.</center>
                        </td>
                        <td>
                              <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                <input type="radio" name="radios2"  class="form-check-input">Sangat puas
                              </label>
  
                              <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                <input type="radio" name="radios2"  class="form-check-input">Puas
                              </label>
  
                              <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                <input type="radio" name="radios2"  class="form-check-input">Tidak puas
                              </label>   
  
                                <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios2"  class="form-check-input"> Sangat Tidak puas
                                </label>                                  
                        </td>
                        
                      </tr>
  
                      <tr>
                          <td >
                            <br>
                              <center>3</center>
                          </td>
                          <td >
                            <br>
                              <center>Pimpinan Jurusan TIK melibatkan dosen dan tenaga kependidikan dalam
                              pengambilan keputusan penting.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio" name="radios3" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios3" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios3" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio" name="radios3" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
    
                      <tr>
                          <td >
                            <br>
                              <center>4</center>
                          </td>
                          <td >
                            <br>
                              <center>Saya mendapatkan dukungan untuk mengikuti magang/detasering/pencangkokan.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio"  name="radios4" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios4" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios4"  class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio"  name="radios4" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                    
                      <tr>
                          <td >
                            <br>
                              <center>5</center>
                          </td>
                          <td >
                            <br>
                              <center>Saya mendapatkan dukungan untuk menjadi anggota asosiasi profesi.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio"  name="radios5" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios5" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios5" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio"  name="radios5" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
    
                      <tr>
                          <td >
                            <br>
                              <center>6</center>
                          </td>
                          <td >
                            <br>
                              <center>Jurusan TIK memberi kesempatan kepada dosen dan tenaga kependidikan untuk
                              berkarir di luar Jurusan.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio"  name="radios6" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios6" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios6" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio"  name="radios6" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
    
                      <tr>
                          <td >
                            <br>
                              <center>7</center>
                          </td>
                          <td >
                            <br>
                              <center>Jurusan TIK memiliki dan menjalankan sistem seleksi, rekrutmen, orientasi, dan
                              penempatan pegawai.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio" name="radios7" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios7"  class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios7" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio"  name="radios7" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>8</center>
                          </td>
                          <td >
                            <br>
                              <center>Saya mendapatkan dukungan untuk mengikuti studi lanjut.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio"  name="radios8" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios8" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios8" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio" name="radios8" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>9</center>
                          </td>
                          <td >
                            <br>
                              <center>Jurusan TIK memiliki dan menjalankan sistem pembinaan pegawai dalam bentuk
                              pemberian penghargaan dan sangsi hukuman.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio"  name="radios9" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios9"  class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios9"  class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio"  name="radios9" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>10</center>
                          </td>
                          <td >
                            <br>
                              <center>Saya mendapatkan dukungan untuk mengikuti seminar/workshop.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio" name="radios10" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios10" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios10"  class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio"  name="radios10" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>11</center>
                          </td>
                          <td >
                            <br>
                              <center>Jurusan TIK memberikan informasi dan menyelenggarakan layanan kenaikan jabatan fungsional dan struktural.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio" name="radios11" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios11" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios11" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio" name="radios11"  class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>12</center>
                          </td>
                          <td >
                            <br>
                              <center>Jurusan TIK memberi penghasilan yang layak untuk memenuhi kebutuhan sehari-
                              hari dan menabung.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio"  name="radios12" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios12"  class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios12" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio" name="radios12" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>13</center>
                          </td>
                          <td >
                            <br>
                              <center>Pimpinan Jurusan TIK menilai dan mengevaluasi pekerjaan yang dilakukan dosendan tenaga kependidikan.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio"  name="radios13" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios13" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios13" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio" name="radios13" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>14</center>
                          </td>
                          <td >
                            <br>
                              <center>Saya mendapatkan dukungan dalam meningkatkan kompetensi terkait tupoksi
                              saya.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio" name="radios14" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios14"  class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios14"  class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio" name="radios14" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>15</center>
                          </td>
                          <td >
                            <br>
                              <center>Jurusan TIK memiliki sarana/tempat kerja/tempat ibadah yang layak.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio" name="radios15"  class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios15"  class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios15" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio" name="radios15"  class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>16</center>
                          </td>
                          <td >
                            <br>
                              <center>Jurusan TIK menyampaikan informasi mengenai layanan peningkatan kebugaranjasmani.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio" name="radios16" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios16"  class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios16"  class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio" name="radios16"  class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>17</center>
                          </td>
                          <td >
                            <br>
                              <center>Jurusan TIK menentukan jenjang karir dosen dan tenaga kependidikan berdasarkanprestasi kerja.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio" name="radios17" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios17" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios17" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio"  name="radios17" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>18</center>
                          </td>
                          <td >
                            <br>
                              <center>Jurusan TIK telah menyelenggarakan system penggajian, tunjangan dan remunerasiyang berkeadilan.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio" name="radios18" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios18"  class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios18"  class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio" name="radios18"  class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>19</center>
                          </td>
                          <td >
                            <br>
                              <center>Jurusan TIK menyampaikan informasi dan mendukung implementasi sistemjaminan kesehatan dan jaminan sosial lainnya.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio"  name="radios19" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios19"  class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios19" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio" name="radios19" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>20</center>
                          </td>
                          <td >
                            <br>
                              <center>Saya dapat berbagi perasaan dan pengalaman dengan rekan kerja saya.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio" name="radios20" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios20"  class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios20" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio" name="radios20" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>21</center>
                          </td>
                          <td >
                            <br>
                              <center>Jurusan TIK memberi penghargaan atas prestasi kerja yang dicapai.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio"  name="radios21" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios21" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios21" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio"  name="radios21" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>22</center>
                          </td>
                          <td >
                            <br>
                              <center>Saya merasa pekerjaan saya memberi makna dalam kehidupan.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio" name="radios22" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios22" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios22" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio"  name="radios22" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>23</center>
                          </td>
                          <td >
                            <br>
                              <center>Jurusan TIK menyediakan layanan kesehatan melalui Poliklinik PNJ.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio" name="radios23" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios23" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios23" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio"  name="radios23" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>24</center>
                          </td>
                          <td >
                            <br>
                              <center>Saya merasa berharga di mata teman sejawat.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio"  name="radios24" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios24" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios24" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio"  name="radios24" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>25</center>
                          </td>
                          <td >
                            <br>
                              <center>Pimpinan Jurusan TIK menanggapi dan menindaklanjuti kritik, saran, dan keluhanyang disampaikan.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio" name="radios25" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios25" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios25"  class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio"  name="radios25" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>26</center>
                          </td>
                          <td >
                            <br>
                              <center>Jurusan TIK memberikan layanan kebutuhan sosial (santunan) dan layanankematian (ambulans).</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio" name="radios26" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios26" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios26" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio"  name="radios26" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>27</center>
                          </td>
                          <td >
                            <br>
                              <center>Saya mendapatkan dukungan untuk mengikuti studi banding/seminar baik didalam maupun luar negeri.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio" name="radios27" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios27" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios27" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio"  name="radios27" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>28</center>
                          </td>
                          <td >
                            <br>
                              <center>Pimpinan Jurusan TIK menjamin penyampaian kritik, saran, dan keluhan secarabebas dan mandiri.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio"  name="radios28" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios28" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios28" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio"  name="radios28" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>29</center>
                          </td>
                          <td >
                            <br>
                              <center>Jurusan TIK menyediakan layanan penggunaan fasilitas seperti gedung, bis, saranaolah raga, dan lainnya.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio" name="radios29" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios29" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios29" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio" name="radios29" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
                      <tr>
                          <td >
                            <br>
                              <center>30</center>
                          </td>
                          <td >
                            <br>
                              <center>Pimpinan Jurusan TIK menyediakan sarana komunikasi untuk menyampaikan kritik,saran, dan keluhan.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio" name="radios30" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios30" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios30" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio" name="radios30" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr> 
                      <tr>
                          <td >
                            <br>
                              <center>31</center>
                          </td>
                          <td >
                            <br>
                              <center>Jurusan TIK menyediakan fasilitas kantor yang memadai untuk menjalankan tugas
                              pokok dan fungsi saya.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio"  name="radios31" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios31" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios31"  class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio"  name="radios31" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>  
                      <tr>
                          <td >
                            <br>
                              <center>32</center>
                          </td>
                          <td >
                            <br>
                              <center>Pimpinan Jurusan TIK menyampaikan secara jelas tupoksi masing-masing SDM
                              yang berada di bawah koordinasinya.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio" name="radios32" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios32" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios32" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio"  name="radios32" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>  
    
                      <tr>
                          <td >
                            <br>
                              <center>33</center>
                          </td>
                          <td >
                            <br>
                              <center>Dalam lingkungan kerja saya tercipta hubungan antarsejawat yang baik dan harmonis.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio"  name="radios33" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios33" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios33" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio" name="radios33" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr> 
    
                      <tr>
                          <td >
                            <br>
                              <center>34</center>
                          </td>
                          <td >
                            <br>
                              <center>Saya dapat meminta bantuan teman sejawat saat kesulitan.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio"  name="radios34" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios34" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios34" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio"  name="radios34" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>   
    
                      <tr>
                          <td >
                            <br>
                              <center>35</center>
                          </td>
                          <td >
                            <br>
                              <center>Pimpinan Jurusan TIK bersedia membantu mengatasi persoalan yang dihadapi dosen
                              dan tenaga kependidikan.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio"  name="radios35" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios35" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios35" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio" name="radios35" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>
    
                      <tr>
                          <td >
                            <br>
                              <center>36</center>
                          </td>
                          <td >
                            <br>
                              <center>Pimpinan Jurusan TIK menyimak perasaan dan pendapat dosen dan mahasiswa PNJ.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio" name="radios36" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios36" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios36" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio"  name="radios36" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr> 
    
                      <tr>
                          <td >
                            <br>
                              <center>37</center>
                          </td>
                          <td >
                            <br>
                              <center>Saya memiliki sikap positif atas diri saya.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio"  name="radios37" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios37" class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios37" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio"  name="radios37" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>  
    
                      <tr>
                          <td >
                            <br>
                              <center>38</center>
                          </td>
                          <td >
                            <br>
                              <center>Saya akan terus bekerja mengabdikan diri dan masa depan saya di PNJ.</center>
                          </td>
                          <td>
                                <label for="inline-radio1" class="form-check-label "style = "margin: 20px" >
                                  <input type="radio"  name="radios38" class="form-check-input">Sangat puas
                                </label>
    
                                <label for="inline-radio2" class="form-check-label "style = "margin: 20px">
                                  <input type="radio" name="radios38"  class="form-check-input">Puas
                                </label>
    
                                <label for="inline-radio3" class="form-check-label "style = "margin: 20px">
                                  <input type="radio"  name="radios38" class="form-check-input">Tidak puas
                                </label>   
    
                                  <label for="inline-radio4" class="form-check-label "style = "margin: 20px">
                                    <input type="radio"  name="radios38" class="form-check-input"> Sangat Tidak puas
                                  </label>                                  
                          </td>
                          
                      </tr>                  
  
                    </tbody>
                  </table>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>    
    @endsection