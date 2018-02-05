<template>
    <ul class="list-group" id="BookList">
        <li v-for="(item, index) in bookList" class="list-group-item">
            <div class="row">
                <div class="col-sm-1">{{index + 1}}</div>
                <div class="col-sm-2">{{item.title}}</div>
                <div class="col-sm-4">{{item.description}}</div>
                <div class="col-sm-4">
                    <button @click="deleteBook(item.id);">
                        Delete
                    </button>
                </div>
            </div>
        </li>
    </ul>
</template>

<script>
    import swal from 'sweetalert2'

    export default {
        props: ['bookList'],

        data() {
            return {

            }
        },

        methods: {
            deleteBook(id) {
                swal({
                    title: 'Are you sure?',
                    text: 'You won\'t be able to revert it',
                    type: 'warning',
                    showCancelButton: true,
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    buttonsStyling: true,
                    reverseButtons: true
                })
                    .then((result) => {
                        if (result.value) {
                            swal(
                                'Deleted!',
                                'The book has been deleted.',
                                'success'
                            );
                            axios.delete('/delete-book/' + id)
                                .then(r => {
                                    this.$emit('reloadList', 1);
                                })

                        } else if (result.dismiss === 'cancel') {
                            swal(
                                'Cancelled',
                                'Your Campaign is safe',
                                'error'
                            )
                        }
                    })
            }
        }

    }
</script>

<style scoped>

</style>