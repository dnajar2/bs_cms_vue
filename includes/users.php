{{ test }}
<div class="text-center">
    <i class="fas fa-redo-alt fa-spin" v-if="members.length == 0"></i>
</div>

<div class="table-responsive" v-if="members.length > 0">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>full Name</th>
            <th>email</th>
            <th>action</th>
        </tr>
        <tr v-for="member in members">
            <td>{{member.f_name}}</td>
            <td>{{ member.email}}</td>
            <td><a :href="'?action=edit&id=' + member.id">edit</a> | delete</td>
        </tr>
        </thead>
    </table>
</div>