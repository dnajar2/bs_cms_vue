<div class="row">
    <div class="col-lg-12">
        <h3>Editing Member Name: {{member.f_name}}</h3>
    </div>

    <div class="col-lg-6 offset-lg-3" v-if="typeof member === 'object'">
        <form id="editMember" action="">
            <div class="form-group col-md-6">
                <label for="f_name">Member Name</label>
                <input type="text" name="f_name" id="f_name" class="form-control" :value="member.f_name">
            </div>
            <div class="form-group col-md-6">
                <label for="l_name">Member Last Name</label>
                <input type="text" name="l_name" id="l_name" class="form-control" :value="member.l_name">
            </div>
            <div class="form-group col-md-6">
                <label for="email">Member Last Name</label>
                <input type="text" name="email" id="email" class="form-control" :value="member.email">
            </div>
        </form>
    </div>
</div>


