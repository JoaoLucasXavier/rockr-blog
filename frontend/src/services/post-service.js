import {http} from './api-service'

export default {
    listAll: () => {
        return http.get('post/index');
    },
    listById: (id) => {
        return http.get('post/show/' + id);
    }
}