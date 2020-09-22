<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Users</div>

                    <div class="card-body">
                        <div v-for="user in users" :key="user.id">
                            {{user.name}}={{user.email}}
                        </div>
<!--                        @foreach ($users as $user)-->
<!--                        {{ $user->name }}-->
<!--                        @endforeach-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['users'],
        data() {
            console.log("data print", this.users);
            return {
                //users:this.users
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
