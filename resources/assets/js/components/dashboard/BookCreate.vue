

<!--
<template>
    <div>
        <h4><a @click="show=true">{{ upload }}</a></h4>
        <form @submit.prevent="saveBook" v-if="show">
            <div class="form-group">
                <label for="title">Book Title</label>
                <input type="text" v-model="book.title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Book Description</label>
                <textarea type="text" v-model="book.description" rows="4" id="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <select class="form-control" v-model="book.name" id="book-category">
                    <option disabled value="">Please select one</option>
                    <option v-for="cat in category">{{cat.name}}</option>
                </select>
            </div>
            &lt;!&ndash;<div class="form-group">
                <input type="file" @change="addPdf" id="pdf" accept=".pdf">
            </div>&ndash;&gt;
            <div class="custom-file-container" data-upload-id="myPdf">
                <label>Upload File <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                <label class="custom-file-container__custom-file" >
                    <input type="file" @change="addPdf()" class="custom-file-container__custom-file__custom-file-input" accept="*">
                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                </label>
                <div class="custom-file-container__image-preview"></div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <pre>{{message}}</pre>
        <book-list @reloadList="fetchBooks" :bookList="bookList"></book-list>
    </div>

</template>

<script>
    import BookList from './BookList'
    import FileUploadWithPreview from 'file-upload-with-preview'

    export default {
        components: { BookList },

        data() {
            return {
                show: false,
                myPdf: 'myPdf',
                message: '',
                upload: 'Upload eBook',
                bookList: '',
                category: '',
                book: {
                    title: '',
                    description: '',
                    name: ''
                }
            }
        },

        methods: {
            reset() {
                this.book = {
                    title: '',
                    description: '',
                    name: ''
                }
            },

            fetchBooks() {
                let self = this;
                axios.get('/get-books').then(r => {
                    self.bookList = r.data.books
                })
                    .catch(e => {
                        console.log(e)
                    })
            },

          saveBook() {
              let p = document.getElementById('myPdf')
              let upload = new FileUploadWithPreview(p);
              console.log(upload);
             /* axios.post('/bookCategory', self.book)
                  .then(r => {
                      this.bookList = r.data.bookList;
                      this.reset();
                      this.show = false;
                      this.upload = 'Upload another eBook'
                  })
                  .catch(e => {
                      console.log(e)
                  })*/
          },
            addPdf() {
                let upload = new FileUploadWithPreview('myPdf')
                console.log(upload)
            },

        },

        created() {
            axios.get('/bookCategory').then(response => {
                this.category = response.data.bookCategory
            }).catch(error => {
                console.log(error)
            });

            this.fetchBooks();

        }
    }
</script>

<style scoped>

</style>

-->
