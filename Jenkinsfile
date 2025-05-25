pipeline {
    agent any
    
    environment {
        REGISTRY = "docker.io"  // Docker Hub
        IMAGE_NAME = "rzaynuri/webs4"
        KUBECONFIG = "/home/jenkins/.kube/config"  // sesuaikan dengan lokasi kubeconfig
    }

    stages {
        stage('Checkout') {
            steps {
                // Clone repository dari GitHub
                git 'https://github.com/bllyjulian/WEB_S4.git'
            }
        }
        
        stage('Build Docker Image') {
            steps {
                script {
                    // Build Docker image
                    docker.build("${REGISTRY}/${IMAGE_NAME}:${GIT_COMMIT}")
                }
            }
        }
        
        stage('Push Docker Image') {
            steps {
                script {
                    // Push image ke Docker Hub
                    docker.withRegistry('https://docker.io', 'docker-credentials') {
                        docker.image("${REGISTRY}/${IMAGE_NAME}:${GIT_COMMIT}").push()
                    }
                }
            }
        }

        stage('Deploy to Kubernetes') {
            steps {
                script {
                    // Deploy image ke Kubernetes
                    sh 'kubectl set image deployment/web-s4-deployment web-s4-container=docker.io/${IMAGE_NAME}:${GIT_COMMIT}'
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
