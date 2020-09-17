@section('test')
<div class="card">
    <!-- <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapse">
            <h5 class="mb-0 white-text text-uppercase font-thin">
                TEST <i class="fas fa-angle-down rotate-icon"></i>
            </h5>
        </a>
    </div> -->
    <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading1">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse" aria-expanded="true" aria-controls="collapse">
            <h5 class="mb-0 white-text text-uppercase font-thin">
                #1 <i class="fas fa-angle-down rotate-icon"></i>
            </h5>
        </a>
    </div>
    <div id="collapse" class="collapse" class="collapse show" role="tabpanel" aria-labelledby="heading1" data-parent="#accordion">
        <div class="card-body">
            <form action="">
                <h3>Instrumen Identifikasi Keagamaan</h3>
                <ol>
                    <li>Sholat 5 waktu di rumah</li>

                    <input type="radio" id="a11" name="a1" value="1">
                    <label for='a11'>Sangat Kurang</label>

                    <input type="radio" id="a12" name="a1" value="2">
                    <label for='a12'>Kurang</label>

                    <input type="radio" id="a13" name="a1" value="3">
                    <label for='a13'>Cukup</label>

                    <input type="radio" id="a14" name="a1" value="4">
                    <label for='a14'>Baik</label>

                    <input type="radio" id="a15" name="a1" value="5">
                    <label for='a15'>Sangat Baik</label>

                    <li>Kegiatan Mengaji di rumah (Membaca Al-Quran, doa, hadits, atau lainnya)</li>

                    <input type="radio" id="a21" name="a2" value="1">
                    <label for='a21'>Sangat Kurang</label>

                    <input type="radio" id="a22" name="a2" value="2">
                    <label for='a22'>Kurang</label>

                    <input type="radio" id="a23" name="a2" value="3">
                    <label for='a23'>Cukup</label>

                    <input type="radio" id="a24" name="a2" value="4">
                    <label for='a24'>Baik</label>

                    <input type="radio" id="a25" name="a2" value="5">
                    <label for='a25'>Sangat Baik</label>

                    <li>Kegiatan Keagamaan di lingkungan rumah</li>
                    <textarea id="a3" name="a3" rows="4" cols="100" placeholder="Masukan teks disini"></textarea>

                    <li>Kegiatan Keagamaan di lingkungan luar rumah</li>
                    <textarea id="a3" name="a3" rows="4" cols="100" placeholder="Masukan teks disini"></textarea>
                </ol>
            </form>
        </div>
    </div>
</div>

<div class="card">
    <!-- <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapse">
            <h5 class="mb-0 white-text text-uppercase font-thin">
                TEST <i class="fas fa-angle-down rotate-icon"></i>
            </h5>
        </a>
    </div> -->
    <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading2">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse">
            <h5 class="mb-0 white-text text-uppercase font-thin">
                #2 <i class="fas fa-angle-down rotate-icon"></i>
            </h5>
        </a>
    </div>
    <div id="collapse2" class="collapse" class="collapse" role="tabpanel" aria-labelledby="heading2" data-parent="#accordion">
        <div class="card-body">
            <form action="">
                <h3>Instrumen Identifikasi Keagamaan</h3>
                <ol>
                    <li>Sholat 5 waktu di rumah</li>

                    <input type="radio" id="a11" name="a1" value="1">
                    <label for='a11'>Sangat Kurang</label>

                    <input type="radio" id="a12" name="a1" value="2">
                    <label for='a12'>Kurang</label>

                    <input type="radio" id="a13" name="a1" value="3">
                    <label for='a13'>Cukup</label>

                    <input type="radio" id="a14" name="a1" value="4">
                    <label for='a14'>Baik</label>

                    <input type="radio" id="a15" name="a1" value="5">
                    <label for='a15'>Sangat Baik</label>

                    <li>Kegiatan Mengaji di rumah (Membaca Al-Quran, doa, hadits, atau lainnya)</li>

                    <input type="radio" id="a21" name="a2" value="1">
                    <label for='a21'>Sangat Kurang</label>

                    <input type="radio" id="a22" name="a2" value="2">
                    <label for='a22'>Kurang</label>

                    <input type="radio" id="a23" name="a2" value="3">
                    <label for='a23'>Cukup</label>

                    <input type="radio" id="a24" name="a2" value="4">
                    <label for='a24'>Baik</label>

                    <input type="radio" id="a25" name="a2" value="5">
                    <label for='a25'>Sangat Baik</label>

                    <li>Kegiatan Keagamaan di lingkungan rumah</li>
                    <textarea id="a3" name="a3" rows="4" cols="100" placeholder="Masukan teks disini"></textarea>

                    <li>Kegiatan Keagamaan di lingkungan luar rumah</li>
                    <textarea id="a3" name="a3" rows="4" cols="100" placeholder="Masukan teks disini"></textarea>
                </ol>
            </form>
        </div>
    </div>
</div>
@endsection