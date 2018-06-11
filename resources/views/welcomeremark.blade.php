<img src="/images/bannerfstm.jpg" width="100%">
<br>
SEJARAH Penubuhan fakulti Sains & Teknologi Maklumat (fstm)<br>
<ul>
<li>FSTM dahulunya dikenali sebagai Jabatan Sains Informasi dan Multimedia (JSIM) pada tahun 1999.
</li>

<li>Pada Mac 2004, JSIM dinaiktaraf kepada Sekolah Pengajian yang dikenali sebagai Sekolah Teknologi dan Sains Informasi (STSI).
</li>

<li>Pada tahun 2011 penstrukturan semula telah dilakukan dengan nama Fakulti Sains dan Teknologi Maklumat (FSTM).
</li>

<li>Kini, FSTM mempunyai lima buah jabatan iaitu Jabatan Teknologi Maklumat (Multimedia), Jabatan Sains Komputer, Jabatan E-Dagang, Jabatan Teknologi Rangkaian dan Jabatan Kemahiran & Kursus Teras.
</li>

<li>FSTM menawarkan enam program iaitu Sarjana Muda Teknologi Maklumat (Multimedia), Sarjana Muda Teknologi Maklumat (Teknologi Rangkaian), Sarjana Muda Kejuruteraan Perisian, Diploma Teknologi Maklumat (Multimedia) dan Diploma Sains Komputer.
</li>
</ul>

  <div class="panel panel-info">
      <div class="panel-heading">Login: email & password
      </div>
      <div class="panel-body">
          <form method="post" action="{{ route('login') }}">
          @csrf
            <div class="form-group">
              <label for="usr">Email:</label>
              <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-info"> Login </button>
          </form>

      </div>
    </div>

