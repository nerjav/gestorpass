@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.serrvidor.actions.edit', ['name' => $serrvidor->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <serrvidor-form
                :action="'{{ $serrvidor->resource_url }}'"
                :data="{{ $serrvidor->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.serrvidor.actions.edit', ['name' => $serrvidor->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.serrvidor.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </serrvidor-form>

        </div>
    
</div>

@endsection