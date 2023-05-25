<div class="form-group row align-items-center" :class="{'has-danger': errors.has('grupo_id'), 'has-success': fields.grupo_id && fields.grupo_id.valid }">
    <label for="grupo_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.servidor.columns.grupo_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.grupo_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('grupo_id'), 'form-control-success': fields.grupo_id && fields.grupo_id.valid}" id="grupo_id" name="grupo_id" placeholder="{{ trans('admin.servidor.columns.grupo_id') }}">
        <div v-if="errors.has('grupo_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('grupo_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ip'), 'has-success': fields.ip && fields.ip.valid }">
    <label for="ip" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.servidor.columns.ip') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ip" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ip'), 'form-control-success': fields.ip && fields.ip.valid}" id="ip" name="ip" placeholder="{{ trans('admin.servidor.columns.ip') }}">
        <div v-if="errors.has('ip')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ip') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('puerto'), 'has-success': fields.puerto && fields.puerto.valid }">
    <label for="puerto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.servidor.columns.puerto') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.puerto" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('puerto'), 'form-control-success': fields.puerto && fields.puerto.valid}" id="puerto" name="puerto" placeholder="{{ trans('admin.servidor.columns.puerto') }}">
        <div v-if="errors.has('puerto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('puerto') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tipodeconexion_id'), 'has-success': fields.tipodeconexion_id && fields.tipodeconexion_id.valid }">
    <label for="tipodeconexion_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.servidor.columns.tipodeconexion_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tipodeconexion_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tipodeconexion_id'), 'form-control-success': fields.tipodeconexion_id && fields.tipodeconexion_id.valid}" id="tipodeconexion_id" name="tipodeconexion_id" placeholder="{{ trans('admin.servidor.columns.tipodeconexion_id') }}">
        <div v-if="errors.has('tipodeconexion_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tipodeconexion_id') }}</div>
    </div>
</div>


