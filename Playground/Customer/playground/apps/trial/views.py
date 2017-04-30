from rest_framework.viewsets import ModelViewSet

from .serializers import TrialSerializer
from .models import Trial

class TrialViewSet(ModelViewSet):
    serializer_class = TrialSerializer

    def get_queryset(self):
        return Trial.objects.filter(self.request.user)

