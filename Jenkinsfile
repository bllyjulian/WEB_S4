pipeline {
    agent any
    
    environment {
        REGISTRY = "docker.io"  // Docker Hub
        IMAGE_NAME = "rzaynuri/webs4"
        KUBECONFIG = "/home/jenkins/.kube/config"  // Sesuaikan dengan lokasi kubeconfig
        NAMESPACE = "default"  // Jika menggunakan namespace tertentu
    }

    stages {
        stage('Checkout') {
            steps {
                // Clone repository dari GitHub
                git branch: 'main', url: 'https://github.com/bllyjulian/WEB_S4.git'
            }
        }

        // List files to verify Dockerfile path
        stage('List Files') {
            steps {
                sh 'ls -R'  // This will help verify the file structure in Jenkins workspace
            }
        }
        
        stage('Build Docker Image') {
            steps {
                script {
                    // Build Docker image from the correct directory if Dockerfile is in the root directory
                    docker.build("${REGISTRY}/${IMAGE_NAME}:${GIT_COMMIT}", '.')
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
                    sh '''
                    kubectl set image deployment/web-s4-deployment web-s4-container=docker.io/${IMAGE_NAME}:${GIT_COMMIT} --namespace=${NAMESPACE}
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
