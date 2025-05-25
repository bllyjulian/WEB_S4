pipeline {
    agent any
    
    environment {
        REGISTRY = "docker.io"  // Docker Hub
        IMAGE_NAME = "rzaynuri/webs4"
        KUBECONFIG = "/home/jenkins/.kube/config"  // Sesuaikan dengan lokasi kubeconfig
        NAMESPACE = "default"  // Jika menggunakan namespace tertentu
        DOCKER_TAG = "${GIT_COMMIT}"  // Use commit hash as the image tag
    }

    stages {
        stage('Checkout') {
            steps {
                // Clone repository dari GitHub
                git branch: 'main', url: 'https://github.com/bllyjulian/WEB_S4.git'
            }
        }

        stage('List Files') {
            steps {
                // List the files in the Jenkins workspace to confirm the presence of Dockerfile
                sh 'ls -R'
            }
        }

        stage('Build Docker Image') {
            steps {
                script {
                    // Build Docker image from the directory containing the Dockerfile
                    docker.build("${REGISTRY}/${IMAGE_NAME}:${DOCKER_TAG}", '.')
                }
            }
        }

        stage('Push Docker Image') {
            steps {
                script {
                    // Push image ke Docker Hub after building it
                    docker.withRegistry('https://docker.io', 'docker-credentials') {
                        docker.image("${REGISTRY}/${IMAGE_NAME}:${DOCKER_TAG}").push()
                    }
                }
            }
        }

        stage('Deploy to Kubernetes') {
            steps {
                script {
                    // Deploy the newly built image to Kubernetes
                    sh '''
                    kubectl set image deployment/web-s4-deployment web-s4-container=docker.io/${IMAGE_NAME}:${DOCKER_TAG} --namespace=${NAMESPACE}
                    '''
                }
            }
        }
    }

    post {
        always {
            // Clean up after build
            cleanWs()
        }
    }
}
