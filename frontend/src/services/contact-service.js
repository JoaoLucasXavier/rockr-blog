import {http} from './api-service'

export default {
    save: (contact) => {
        return http.post('contacts', contact)
    }
}