<template>
    <div class="modal" :id="id" tabindex="-1" role="dialog" aria-labelledby="ajaxModal" aria-hidden="true"
         style="display: none;">
        <div class="modal-dialog mini-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="ajaxModalTitle" data-title="RISE - Ultimate Project Manager">Add
                        project</h4>
                </div>
                <div id="ajaxModalContent">fdghfdgfdgfdgfdg</div>
                <div id="ajaxModalOriginalContent" class="">
                    <div class="original-modal-body">
                        <div class="circle-loader"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
    <!--        <div class="modal-dialog" role="document">-->
    <!--            <div class="modal-content">-->
    <!--                <div class="modal-header">-->
    <!--                    <h5 class="modal-title">Modal title</h5>-->
    <!--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
    <!--                        <span aria-hidden="true">&times;</span>-->
    <!--                    </button>-->
    <!--                </div>-->
    <!--                <div class="modal-body">-->
    <!--                    <p>Modal body text goes here.</p>-->
    <!--                </div>-->
    <!--                <div class="modal-footer">-->
    <!--                    <button type="button" class="btn btn-primary">Save changes</button>-->
    <!--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
</template>

<script>
    export default {
        name: 'add-project-modal',
        props: ['id', 'data'],
        data: function () {
            return {};
        },
        mounted() {
            console.log('Add project modal')
        }
    }
</script>
