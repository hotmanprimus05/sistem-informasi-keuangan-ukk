<!-- bayar -->
<div class="modal fade" id="modalBayar" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
    aria-labelledby="modalBayarLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <form action="{{ route('kasir.bayar') }}" method="POST" id="bayarForm">
            <div class="modal-content">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="modalBayarLabel">Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span id="notif_bayar"></span>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Total</label>
                        <div class="col-sm-9">
                            <h4 class="totalAllModal"></h4>
                            <input type="hidden" id="totalAllModalValue">
                        </div>
                    </div>

                    {{-- <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Tunai</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="modal_bayar_input">
                        </div>
                    </div> --}}

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Tunai</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="modal_bayar_input">
                            <div id="error_message" class="text-danger" style="display: none;">Tunai harus lebih besar atau sama dengan total</div>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Kembali</label>
                        <div class="col-sm-9">
                            <h4 id="modalBayarKembali"></h4>
                            <input type="hidden" id="modalBayarKembaliValue">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm btn-simpan">Bayar</button>
                </div>
            </div>
        </form>
    </div>
</div>



<!-- CETAK RESI -->
<div class="modal fade" id="modalCetakResi" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
    aria-labelledby="modalCetakResiLabel" aria-hidden="true">
    <div class="modal-dialog modal-xs">
        <form action="/" method="POST" id="modalCetakResiForm">
            <div class="modal-content">
                @csrf
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <h4>Apakah Anda ingin cetak resi?</h4>
                </div>
                <div class="modal-footer" style="display: block !important;">
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">Hanya
                                Simpan(Esc)</button>
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary btn-sm float-end" id="btnPrintResi">Ya
                                (Enter)</button>
                        </div>
                    </div>


                </div>
            </div>
        </form>
    </div>
</div>


<script>
    // $(document).ready(function() {
    //     // Fungsi untuk memeriksa dan validasi input
    //     function validatePayment() {
    //         var total = parseFloat($('#totalAllModalValue').val());
    //         var bayar = parseFloat($('#modal_bayar_input').val());
    //         var error_message = $('#error_message');

    //         // Memeriksa apakah bayar kurang dari total
    //         if (bayar < total) {
    //             error_message.show();
    //             $('.btn-simpan').prop('disabled', true); // Disable tombol submit
    //             return false;
    //         } else {
    //             error_message.hide();
    //             $('.btn-simpan').prop('disabled', false); // Enable tombol submit
    //             return true;
    //         }
    //     }

    //     // Event listener untuk perubahan pada input tunai
    //     $('#modal_bayar_input').on('input', function() {
    //         validatePayment();
    //     });

    //     // Optional: Validasi lagi pada saat submit, sebagai lapisan validasi tambahan
    //     $('#bayarForm').submit(function(event) {
    //         if (!validatePayment()) {
    //             event.preventDefault(); // Mencegah form disubmit jika validasi gagal
    //         }
    //     });
    // });

    $(document).ready(function() {
    $('#modal_bayar_input').on('input change', function() { // Menambahkan event change sebagai fallback
        validatePayment();
    });
});

function validatePayment() {
    var total = parseFloat($('#totalAllModalValue').val());
    var bayar = parseFloat($('#modal_bayar_input').val().replace(/,/g, '')); // Menghilangkan koma jika ada
    console.log("Total: ", total, "Bayar: ", bayar); // Debugging

    if (!isNaN(bayar) && bayar < total) { // Menambahkan pengecekan isNaN untuk bayar
        $('#error_message').show();
        $('.btn-simpan').prop('disabled', true);
    } else {
        $('#error_message').hide();
        $('.btn-simpan').prop('disabled', false);
    }
}

    </script>
