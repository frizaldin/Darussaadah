<!-- Jika Pagination terdeteksi -->
@if ($paginator->hasPages())
<!--
    d-flex = display: flex
    justify-items-center = posisikan item di tengah di antara garis x
    justify-content-between = kerenggangan per item

    flex-fill = mengisi ruang kosong di antara item
    d-sm-none = ketika layar seukuran hp maka tag ini hilangkan
 -->
<nav class="d-flex justify-items-center justify-content-between">

    <div class="d-flex justify-content-between flex-fill">

        <ul class="pagination">

            <!-- Jika page berada pada halaman pertama maka jalankan
                kode berikut
            -->
            @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true">
                <!-- @lang('pagination.previous') merupakan
                    indikator untuk kehalaman sebelumnnya
                -->
                <span class="page-link">@lang('pagination.previous')</span>
            </li>
            @else
            <!-- Jika bukan  maka jalankan code berikut -->
            <li class="page-item">
                <!--
                    $paginator->previousPageUrl() = mengambil url halaman sebelumnya dari
                    halaman yang sekarang aktif

                    @lang('pagination.previous') = mengambil angka dari halaman sebelumnya
                    dari halaman yang aktif sekarang
                 -->
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
            </li>
            @endif




            <!-- Jika pagination memiliki lebih banyak page -->
            @if ($paginator->hasMorePages())
            <!--
                $paginator->nextPageUrl() = mengambil url dari next page yang sekarang
                aktif
                @lang('pagination.next') = mengambil angka dari next page yang sekarang
                aktif
            -->
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">
                    @lang('pagination.next')</a>
            </li>
            @else
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link">@lang('pagination.next')</span>
            </li>
            @endif
        </ul>

    </div>

</nav>
@endif