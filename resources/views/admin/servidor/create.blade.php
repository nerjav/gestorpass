@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.servidor.actions.create'))

@section('body')

    <div class="container-xl">

                <div class="card">

        <servidor-form
            :action="'{{ url('admin/servidors') }}'"
<<<<<<< HEAD
            :tipodeconexion="{{ $tipodeconexion->toJson() }}"
            :grupo="{{ $grupo->toJson() }}"
=======
             :tipodeconexion="{{$tipodeconexion->toJson() }}"
            :grupo="{{$grupo->toJson() }}"
>>>>>>> main
            v-cloak
            inline-template>

            <form class="form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="action" novalidate>

                <div class="card-header">
                    <i class="fa fa-plus"></i> {{ trans('admin.servidor.actions.create') }}
                </div>

                <div class="card-body">
                    @include('admin.servidor.components.form-elements')
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" :disabled="submiting">
                        <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                        {{ trans('brackets/admin-ui::admin.btn.save') }}
                    </button>
                </div>

            </form>

        </servidor-form>

        </div>

        </div>


@endsection
