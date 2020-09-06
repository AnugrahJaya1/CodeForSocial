@section('partA')
<div class="card">
    <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseOne">
            <h5 class="mb-0 white-text text-uppercase font-thin">
                Part A <i class="fas fa-angle-down rotate-icon"></i>
            </h5>
        </a>
    </div>
    <div id="collapseOne" class="collapse" data-parent="#accordion">
        <div class="card-body">
            <h3>Instrumen Identifikasi Keagamaan</h3>
            <ol>
                <li>Sholat 5 waktu di rumah</li>
                <form>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Sangat Kurang
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Kurang
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Cukup
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Baik
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Sangat Baik
                    </label>
                </form>

                <li>Kegiatan Mengaji di rumah (Membaca Al-Quran, doa, hadits, atau lainnya)</li>
                <form>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Sangat Kurang
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Kurang
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Cukup
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Baik
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Sangat Baik
                    </label>
                </form>

                <li>Kegiatan Keagamaan di lingkungan rumah</li>
                <form>
                    <label class="checkbox-inline">
                        <textarea rows="4" cols="50" name="comment" form="usrform">
                            Enter text here...
                        </textarea>
                    </label>
                </form>

                <li>Kegiatan Keagamaan di lingkungan luar rumah</li>
                <form>
                    <label class="checkbox-inline">
                        <textarea rows="4" cols="50" name="comment" form="usrform">
                            Enter text here...
                        </textarea>
                    </label>
                </form>
            </ol>
        </div>
    </div>
</div>
@endsection