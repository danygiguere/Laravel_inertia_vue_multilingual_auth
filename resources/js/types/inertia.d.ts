declare module '@inertiajs/core' {
    interface PageProps {
        auth: {
            user: {
                id: number
                name: string
                email: string
            } | null
        }
        locale: string
        [key: string]: unknown
    }
}
