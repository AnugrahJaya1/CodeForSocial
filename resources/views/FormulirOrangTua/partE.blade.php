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
            <h3>Instrumen identifikasi Pengembangan Keterampilan Diri</h3>
            <ol>
                <li>Kegiatan keterampilan yang paling disukai</li>
                <form>
                    <label class="checkbox-inline">
                        <textarea rows="4" cols="50" name="comment" form="usrform">
                            Enter text here...
                        </textarea>
                    </label>
                </form>
                <li>Kegiatan keterampilan yang paling tidak disukai</li>
                <form>
                    <label class="checkbox-inline">
                        <textarea rows="4" cols="50" name="comment" form="usrform">
                            Enter text here...
                        </textarea>
                    </label>
                </form>
                <li>Hobi yang sering dilakukan di rumah</li>
                <form>
                    <label class="checkbox-inline">
                        <textarea rows="4" cols="50" name="comment" form="usrform">
                            Enter text here...
                        </textarea>
                    </label>
                </form>
                <li>Kegiatan memasak</li>
                <form>
                    <label class="checkbox-inline">
                        <textarea rows="4" cols="50" name="comment" form="usrform">
                            Enter text here...
                        </textarea>
                    </label>
                </form>
                <li>Kegiatan keterampilan tangan</li>
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