@props(['table'])

<!-- add table pagination links -->
<div class="row table_pagination">
    <div class="col-sm-12 col-md-6 table_pagination_links">
        {!! $table->links() !!}
    </div>
    <div class="col-sm-12 col-md-6 table_pagination_description">
        {{ $table->count() }} de {{ $table->total() }} registro{{ $table->total() > 1 ? 's' : '' }}, página {{ $table->currentPage() }} de um total de {{ $table->lastPage() }} página{{ $table->lastPage() > 1 ? 's' : '' }}
    </div>
</div>
