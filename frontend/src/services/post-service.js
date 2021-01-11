import {http} from './api-service'

export default {
    listAll: () => {
        return http.get('posts');
    },
    listById: (id) => {
        return http.get('posts/' + id);
    }
}