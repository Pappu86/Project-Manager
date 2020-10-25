<template>
    <div class="col-md-12 p-0">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Projects</h4>
                <div class="card-title-button-group">
                    <a type="button" class="btn btn-primary" @click="addProject">add project</a>
                </div>
            </div>

            <div class="card-body">
                <div v-for="project in projects" :key="project.id">
                    {{project.name}}:{{project.status}}
                </div>
            </div>
        </div>
        <div>
            <add-project-modal></add-project-modal>
        </div>
        <!-- Render modal -->
        <div>
            <div :is="element.component" v-for="element in elements" v-bind="element.props" :key="element.id"
                 @customEvent="elementEvent" style="display: none;"></div>
        </div>
    </div>
</template>

<script>
    import AddProjectModal from './AddProjectModal.vue';
    //import showModal from './modal.js';

    export default {
        name: 'project-list',
        props: ['projects'],
        data: function () {
            return {
                elements: []
            }
        },
        components: {
            AddProjectModal
        },
        methods: {
            addProject: function (event) {

                console.log("this click event", event);

                let id = '12345',
                    instance = this;
                instance.elements.push({component: 'add-project-modal', props: {id: id, data: {}}});

                $('#' + id).parent().show();

                console.log("instance.elements", instance.elements);

                setTimeout(function () {
                    $('#' + id).modal('show');


                    $('#' + id).on('hidden.bs.modal', function () {
                        $('#' + id).remove();
                    });
                }, 200);

                //let data = {};
                //showModal(this, "add-project-modal", data);
            },
            elementEvent: function (data, type) {

            }
        },
        mounted() {
            console.log('Projects Component mounted.')
        }
    }
</script>
