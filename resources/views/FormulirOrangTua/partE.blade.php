@section('partE')
<div class="card">
    <div class="card-header  rgba-stylish-strong z-depth-1 mb-1">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
            <h5 class="mb-0 white-text text-uppercase font-thin">
                Part E <i class="fas fa-angle-down rotate-icon"></i>
            </h5>
        </a>
    </div>
    <div id="collapseFive" class="collapse" data-parent="#accordion">
        <div class="card-body">
            <!-- <form action=""> -->
                <h3>Instrumen identifikasi Pengembangan Keterampilan Diri</h3>
                <ol>
                    <!-- 1 -->
                    <li>Kegiatan keterampilan yang paling disukai</li>
                    <textarea id="e1" name="e1" rows="4" cols="100" placeholder="Masukan teks disini"></textarea>

                    <!-- 2 -->
                    <li>Kegiatan keterampilan yang paling tidak disukai</li>
                    <textarea id="e2" name="e2" rows="4" cols="100" placeholder="Masukan teks disini"></textarea>

                    <!-- 3 -->
                    <li>Hobi yang sering dilakukan di rumah</li>
                    <textarea id="e3" name="e3" rows="4" cols="100" placeholder="Masukan teks disini"></textarea>

                    <!-- 4 -->
                    <li>Kegiatan memasak</li>
                    <textarea id="e4" name="e4" rows="4" cols="100" placeholder="Masukan teks disini"></textarea>

                    <!-- 5 -->
                    <li>Kegiatan keterampilan tangan</li>
                    <textarea id="e5" name="e5" rows="4" cols="100" placeholder="Masukan teks disini"></textarea>
                </ol>
            <!-- </form> -->
        </div>
    </div>
</div>
@endsection