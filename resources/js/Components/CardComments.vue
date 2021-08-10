<template>
    <div class="thread">
        <ul class="media-list thread-list list-comments">
            <li 
                class="single-thread"
                    v-for="item in commentsFormat"
                    :key="item.comment.id"
                >
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" src="/img/m1.png" alt="Commentator Avatar">
                        </a>
                    </div>
                    <div class="media-body">
                        <div>
                            <div class="media-heading">
                                <a href="author.html">
                                    <h4>{{ item.comment.user.name }}</h4>
                                </a>
                                <span>{{ item.comment.time }}</span>
                            </div>
                            <!-- <span class="comment-tag buyer">Purchased</span> -->
                            <!-- <a href="#" class="reply-link">Reply</a> -->
                        </div>
                        <p>{{ item.comment.content }}</p>
                    </div>
                </div>
                
                <ul class="children list-comments-children">
                    <li 
                        class="single-thread depth-2"
                        v-for="question in item.subcomments"
                        :key="question.id"
                    >
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="/img/m2.png" alt="Commentator Avatar">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <h4>{{ question.user.name }}</h4>
                                    <span>{{ question.time }}</span>
                                </div>
                                <span class="comment-tag author">Author</span>
                                <p>{{ question.content }}</p>
                            </div>
                        </div>
                    </li>
                    <!-- <li class="single-thread depth-2">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="/img/m1.png" alt="Commentator Avatar">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <h4>Themexylum</h4>
                                    <span>9 Hours Ago</span>
                                </div>
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra,
                                    justo ut sceleris que the mattis, leo quam aliquet congue
                                    placerat mi id nisi interdum mollis. </p>
                            </div>
                        </div>
                    </li> -->
                </ul>
                
            </li>
        </ul>
    
        <div class="comment-form-area">
            <h4>Enviar un Comentario</h4>
            <div class="media comment-form">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="/img/m7.png" alt="Commentator Avatar">
                    </a>
                </div>
                <div class="media-body">
                    <form @submit.prevent="sendComment" class="comment-reply-form">
                        <textarea 
                            name="reply-comment" 
                            placeholder="Escribe tu comentario..." 
                            v-model="textComment"
                        />
                        <button class="btn btn--sm btn-primary">Escribir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import moment from 'moment';

export default ({
    props: ['comments'],
    data() {
        return {
            commentsFormat: [],
            textComment: ""
        }
    },
    created(){
        let newComments = []
        let mapComments = {};

        this.comments.forEach(value => {
            let time = moment(value.created_at).format('DD/MM/YY');
            let newValue = {
                id: value.id,
                comment_id: value.comment_id,
                content: value.content,
                user: value.user,
                time,
                created_at: value.created_at
            }

            if (!value.comment_id){
                mapComments[value.id] = newComments.length;
                
                newComments.push({
                    comment: newValue,
                    subcomments: []
                });
                //Es root
                
            }else {
                let commentRoot = [...newComments].splice(mapComments[value.comment_id], 1)[0];

                let newCommentRoot = {
                        ...commentRoot,
                        subcomments: [
                            ...commentRoot.subcomments,
                            newValue
                        ]
                    }

                newComments = newComments.map(c => value.comment_id !== c.comment.id ? 
                    c
                    :
                    newCommentRoot    
                )
                
                // console.log('commentRoot', commentRoot)
                // return newComments;
            }
            // console.log(newComments, value)
        });

        this.commentsFormat = newComments;

        console.log('newComments', newComments)
    },
    methods: {
        sendComment(){
            console.log('textComment', this.textComment);
            this.textComment = "";

        }
    }
})
</script>


<style scoped>
    .list-comments-children {
        max-height: 300px;
        overflow: auto;
    }

    .list-comments {
        max-height: 500px;
        overflow: auto;
        border: 1px solid #ddd;
    }
</style>